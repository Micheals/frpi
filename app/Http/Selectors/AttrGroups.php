<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/24/2016
 * Time: 10:42 AM
 */

namespace App\Http\Selectors;


use App\Repo\AttrGroup\AttrGroupRepository;

class AttrGroups
{
    /**
     * @var AttributeRepository
     */
    private $model;


    /**
     * @param AttrGroupRepository $model
     */
    public function __construct(AttrGroupRepository $model)
    {
        $this->model = $model;
    }

    /**
     * @param $view
     */
    public function compose($view)
    {
        $view->with(['attrGroups'=>$this->model->select()]);
    }
}