<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/24/2016
 * Time: 12:56 AM
 */

namespace App\Http\Selectors;


use App\Repo\Manufactures\ManufactureRepository;

class Manufactures
{
    /**
     * @var ManufactureRepository
     */
    private $model;

    /**
     * Manufactures constructor.
     * @param ManufactureRepository $model
     */
    public function __construct(ManufactureRepository $model)
    {
        $this->model = $model;
    }

    /**
     * @param $view
     */
    public function compose($view)
    {
        $view->with(['manufactures'=>$this->model->select()]);
    }
}