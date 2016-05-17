<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/24/2016
 * Time: 1:26 AM
 */

namespace App\Http\Selectors;


use App\Repo\Products\ProductRepository;

class Products
{
    /**
     * @var ProductRepository
     */
    private $model;

    /**
     * Products constructor.
     * @param ProductRepository $model
     */
    public function __construct(ProductRepository $model)
    {
        $this->model = $model;
    }

    /**
     * @param $view
     */
    public function compose($view)
    {
        $view->with(['products'=>$this->model->select()]);
    }

    /**
     * @param $view
     */
    public function reviews($view)
    {
        $view->with(['products'=>$this->model->select()]);
    }
}