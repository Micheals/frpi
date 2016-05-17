<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/22/2016
 * Time: 4:24 PM
 */

namespace App\Http\Tables;
use App\Repo\AttrGroup\AttrGroupRepository;
class AttrGroups
{
    /**
     * @var AttrGroupRepo
     */
    private $model;

    /**
     * AttrGroups constructor.
     * @param AttrGroupRepo $model
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
        $view->with(['attrGroups'=>$this->model->getAll()]);
    }
}