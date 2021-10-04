<?php
/*
 * File name: DashboardController.php
 * Last modified: 2021.08.08 at 12:38:46
 * Author: SmarterVision - https://codecanyon.net/user/smartervision
 * Copyright (c) 2021
 */

namespace App\Http\Controllers\Website;

use App\Criteria\EServices\EServicesOfUserCriteria;
use App\Criteria\EServices\NearCriteria;
use App\Criteria\Slides\EnabledCriteria;
use App\Criteria\Slides\OrderCriteria;
use App\Repositories\BookingRepository;
use App\Repositories\CurrencyRepository;
use App\Repositories\EarningRepository;
use App\Repositories\EProviderRepository;
use App\Repositories\EServiceRepository;
use App\Repositories\SlideRepository;
use App\Repositories\UserRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Exceptions\RepositoryException;
use Stevebauman\Location\Location;

class StoreController extends Controller
{
    /** @var  eServiceRepository */
    private $eServiceRepository;
    private $currencyRepository;
    private $slideRepository;

    public function __construct(CurrencyRepository $currencyRepository, EServiceRepository $eServiceRepo, SlideRepository $slideRepo)
    {
        parent::__construct();

        $this->currencyRepository = $currencyRepository;
        $this->eServiceRepository = $eServiceRepo;
        $this->slideRepository = $slideRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Http\JsonResponse|View
     */
    public function index()
    {
        $google_maps_key    = DB::table('app_settings')->where('key', 'google_maps_key')->value('value');
        $default_currency   = DB::table('app_settings')->where('key', 'default_currency')->value('value');
        $primary_color      = DB::table('app_settings')->where('key', 'primary_color')->value('value');

        try {
            $this->slideRepository->pushCriteria(new OrderCriteria());
            $this->slideRepository->pushCriteria(new EnabledCriteria());
        } catch (RepositoryException $e) {
            return $this->sendError($e->getMessage());
        }

        $slides = $this->slideRepository->all()->toArray();

        $category_count = DB::table('e_service_categories')
            ->select('category_id', DB::raw("COUNT(*) as category_count"))
            ->groupBy('category_id');

        $featured_categories = DB::table('categories')
            ->select('id', 'c.category_count', 'name', 'color')
            ->leftJoinSub($category_count, 'c', function ($join) {
                $join->on('categories.id', '=', 'c.category_id');
            })->where('featured', 1)->get();

        $featured_reviews = DB::table('e_service_reviews')
            ->select('e_service_reviews.review', 'e_service_reviews.rate', DB::raw('users.name as username'), DB::raw('e_services.name as service_name'))
            ->join('users', 'e_service_reviews.user_id', '=', 'users.id')
            ->join('e_services', 'e_service_reviews.e_service_id', '=', 'e_services.id')
            ->where('e_service_reviews.featured', 1)->get();

        return view('website.index')
            ->with("page", 'home')
            ->with("google_maps_key", $google_maps_key)
            ->with("default_currency", $default_currency)
            ->with("slides", $slides)
            ->with("featured_categories", $featured_categories)
            ->with("featured_reviews", $featured_reviews)
            ->with("primary_color", $primary_color);
    }

    public function listing()
    {
        $google_maps_key = DB::table('app_settings')->where('key', 'google_maps_key')->value('value');
        $default_currency = DB::table('app_settings')->where('key', 'default_currency')->value('value');
        $category_count = DB::table('e_service_categories')
            ->select('category_id', DB::raw("COUNT(*) as category_count"))
            ->groupBy('category_id');
        $featured_categories = DB::table('categories')
            ->select('id', 'c.category_count', 'name', 'color')
            ->leftJoinSub($category_count, 'c', function ($join) {
                $join->on('categories.id', '=', 'c.category_id');
            })->where('featured', 1)->get();

        return view('website.listing')
            ->with("page", 'listing')
            ->with("google_maps_key", $google_maps_key)
            ->with("default_currency", $default_currency)
            ->with("featured_categories", $featured_categories);
    }

    public function listing_detail($id)
    {
        $google_maps_key = DB::table('app_settings')->where('key', 'google_maps_key')->value('value');
        $default_currency = DB::table('app_settings')->where('key', 'default_currency')->value('value');

        $data = array('with' => 'options;categories;eServiceReviews;eServiceReviews.user');
        try {
            $this->eServiceRepository->pushCriteria(new RequestCriteria(new Request($data)));
        } catch (RepositoryException $e) {
            return $this->sendError($e->getMessage());
        }
        $eServices = $this->eServiceRepository->findWithoutFail($id);
        $eServices = $eServices->toArray();

        return view('website.listing_detail')
            ->with("page", 'listing_detail')
            ->with("google_maps_key", $google_maps_key)
            ->with("default_currency", $default_currency)
            ->with("service_detail", $eServices);
    }

    public function contact()
    {
        $google_maps_key = DB::table('app_settings')->where('key', 'google_maps_key')->value('value');
        $default_currency = DB::table('app_settings')->where('key', 'default_currency')->value('value');
        $latitude = DB::table('app_settings')->where('key', 'latitude')->value('value');
        $longitude = DB::table('app_settings')->where('key', 'longitude')->value('value');
        $address = DB::table('app_settings')->where('key', 'address')->value('value');
        $web = DB::table('app_settings')->where('key', 'website')->value('value');
        $phone = DB::table('app_settings')->where('key', 'phone')->value('value');
        $email = DB::table('app_settings')->where('key', 'email')->value('value');

        return view('website.contact')
            ->with("page", 'contact')
            ->with("google_maps_key", $google_maps_key)
            ->with("default_currency", $default_currency)
            ->with("latitude", $latitude)
            ->with("longitude", $longitude)
            ->with("address", $address)
            ->with("website", $web)
            ->with("phone", $phone)
            ->with("email", $email);
    }

    public function about()
    {
        $google_maps_key = DB::table('app_settings')->where('key', 'google_maps_key')->value('value');
        $default_currency = DB::table('app_settings')->where('key', 'default_currency')->value('value');

        $featured_reviews = DB::table('e_service_reviews')
            ->select('e_service_reviews.review', 'e_service_reviews.rate', DB::raw('users.name as username'), DB::raw('e_services.name as service_name'))
            ->join('users', 'e_service_reviews.user_id', '=', 'users.id')
            ->join('e_services', 'e_service_reviews.e_service_id', '=', 'e_services.id')
            ->where('e_service_reviews.featured', 1)->get();


        return view('website.about')
            ->with("page", 'about')
            ->with("google_maps_key", $google_maps_key)
            ->with("default_currency", $default_currency)
            ->with("featured_reviews", $featured_reviews);
    }

    /**
     * @param Collection $eServices
     */
    private function availableEServices(Collection &$eServices)
    {
        $eServices = $eServices->where('available', true);
    }

    /**
     * @param Request $request
     * @param Collection $eServices
     */
    private function orderByRating(Request $request, Collection &$eServices)
    {
        if ($request->has('rating')) {
            $eServices = $eServices->sortBy('rate', SORT_REGULAR, true);
        }
    }

    /**
     * @param Collection $eServices
     */
    private function featuredEServices(Collection &$eServices)
    {
        $eServices = $eServices->where('featured', true);
    }

    public function getservices(Request $request)
    {
        $lat = $request->input('lat');
        $lng = $request->input('lng');
        try {
            $data = array(
//                "only" => "id;name;price;discount_price;price_unit;has_media;media;total_reviews;rate",
//                "limit" => "6",
                "myLat" => $lat,
                "myLon" => $lng
            );

            $this->eServiceRepository->pushCriteria(new NearCriteria(new Request($data)));
        } catch (RepositoryException $e) {
            return $this->sendError($e->getMessage());
        }

        $eServices = $this->eServiceRepository->all();
        $this->availableEServices($eServices);
        $eServices = array_values($eServices->toArray());
        return json_encode($eServices);
    }
}
