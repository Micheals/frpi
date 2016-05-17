<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/24/2016
 * Time: 1:40 AM
 */

namespace App\Http\Selectors;


use App\Repo\Tags\TagRepository;

class Tags
{
    /**
     * @var TagRepository
     */
    private $model;

    /**
     * Tags constructor.
     * @param TagRepository $model
     */
    public function __construct(TagRepository $model)
    {
        $this->model = $model;
    }

    /**
     * @param $view
     */
    public function compose($view)
    {
        $view->with(['tags'=>$this->model->select()]);
    }

    /**
     * @param $view
     */
    public function footer($view)
    {
        $view->with(['tags'=>$this->model->getAll()]);
    }
}