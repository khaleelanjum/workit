<?php
/*
 * File name: CategoryRepository.php
 * Last modified: 2021.01.31 at 14:03:57
 * Author: SmarterVision - https://codecanyon.net/user/smartervision
 * Copyright (c) 2021
 */

namespace App\Repositories;

use App\Models\Packages;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CategoryRepository
 * @package App\Repositories
 * @version January 19, 2021, 2:04 pm UTC
 *
 * @method Packages findWithoutFail($id, $columns = ['*'])
 * @method Packages find($id, $columns = ['*'])
 * @method Packages first($columns = ['*'])
 */
class PackagesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'price',
        'expiration_time',
        'usage',
        'status',
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Packages::class;
    }
}
