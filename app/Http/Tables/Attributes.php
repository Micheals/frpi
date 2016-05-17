<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/25/2016
 * Time: 7:14 PM
 */

namespace App\Http\Tables;


use App\Repo\Attributes\AttributeRepository;
use Illuminate\Support\Facades\Session;

class Attributes
{
    /**
     * @var AttributeRepository
     */
    private $model;

    /**
     * Attributes constructor.
     * @param AttributeRepository $model
     */
    public function __construct(AttributeRepository $model)
    {
        $this->model = $model;
    }

    /**
     * @param $view
     */
    public function compose($view)
    {
        $id=Session::get('product_id');
        $view->with(['product'=>$this->model->getById($id)]);
    }
}