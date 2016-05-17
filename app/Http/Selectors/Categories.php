<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/24/2016
 * Time: 1:16 AM
 */

namespace App\Http\Selectors;


use App\Repo\Categories\CategoryRepository;

class Categories
{
    /**
     * @var CategoryRepository
     */
    private $model;

    /**
     * Categories constructor.
     * @param CategoryRepository $model
     */
    public function __construct(CategoryRepository $model)
    {
        $this->model = $model;
    }

    /**
     * @param $view
     */
    public function compose($view)
    {
        $view->with(['categories'=>$this->model->select()]);
    }

    /**
     * @param $view
     */
    public function index($view)
    {
        $view->with(['categories'=>$this->model->getAll()]);
    }
}