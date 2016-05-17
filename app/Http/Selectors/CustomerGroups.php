<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/24/2016
 * Time: 2:52 PM
 */

namespace App\Http\Selectors;


use App\Repo\CustomerGroup\CustomerGroupRepository;

class CustomerGroups
{
    /**
     * @var CustomerGroupRepository
     */
    private $model;

    /**
     * CustomerGroup constructor.
     * @param CustomerGroupRepository $model
     */
    public function __construct(CustomerGroupRepository $model)
    {
        $this->model = $model;
    }

    /**
     * @param $view
     */
    public function compose($view)
    {
        $view->with(['customerGroups'=>$this->model->select()]);
    }
}