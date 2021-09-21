<?php
/*
 * File name: DashboardController.php
 * Last modified: 2021.08.08 at 12:38:46
 * Author: SmarterVision - https://codecanyon.net/user/smartervision
 * Copyright (c) 2021
 */

namespace App\Http\Controllers\Website;

use App\Repositories\BookingRepository;
use App\Repositories\EarningRepository;
use App\Repositories\EProviderRepository;
use App\Repositories\UserRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class StoreController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $google_maps_key = DB::table('app_settings')->where('key', 'google_maps_key')->value('value');
        $category_count = DB::table('e_service_categories')
            ->select('category_id', DB::raw("COUNT(*) as category_count"))
            ->groupBy('category_id');

        $featured_categories = DB::table('categories')
            ->select('id', 'c.category_count', 'name', 'color')
            ->leftJoinSub($category_count, 'c', function ($join) {
                $join->on('categories.id', '=', 'c.category_id');
            })->where('featured', 1)->get();

        $featured_services = DB::table('e_services')
            ->select('e_services.id', 'e_services.name', 'e_services.price', 'e_services.available', DB::raw('categories.name as category_name'))
            ->join('e_service_categories', 'e_services.id', '=', 'e_service_categories.e_service_id')
            ->join('categories', 'categories.id', '=', 'e_service_categories.category_id')
            ->where('e_services.featured', 1)
            ->get();

        return view('website.index')
            ->with("page", 'home')
            ->with("google_maps_key", $google_maps_key)
            ->with("featured_categories", $featured_categories)
            ->with("featured_services", $featured_services);
    }

    public function contact()
    {
        $google_maps_key = DB::table('app_settings')->where('key', 'google_maps_key')->value('value');
        $latitude = DB::table('app_settings')->where('key', 'latitude')->value('value');
        $longitude = DB::table('app_settings')->where('key', 'longitude')->value('value');
        $address = DB::table('app_settings')->where('key', 'address')->value('value');
        $web = DB::table('app_settings')->where('key', 'website')->value('value');
        $phone = DB::table('app_settings')->where('key', 'phone')->value('value');
        $email = DB::table('app_settings')->where('key', 'email')->value('value');

        return view('website.contact')
            ->with("page", 'contact')
            ->with("google_maps_key", $google_maps_key)
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

        return view('website.about')
            ->with("page", 'about')
            ->with("google_maps_key", $google_maps_key);
    }
}
