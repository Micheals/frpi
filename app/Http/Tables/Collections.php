<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 5/14/2016
 * Time: 12:00 PM
 */

namespace App\Http\Tables;


use App\Repo\Collections\CollectionRepository;

class Collections
{
    /**
     * @var CollectionRepository
     */
    private $model;

    /**
     * Collections constructor.
     * @param CollectionRepository $model
     */
    public function __construct(CollectionRepository $model)
    {
        $this->model = $model;
    }

    /**
     * @param $view
     */
    public function compose($view)
    {
        $view->with(['collections'=>$this->model->getAll()]);
    }
}