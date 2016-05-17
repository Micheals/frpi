<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 5/5/2016
 * Time: 5:00 PM
 */

namespace App\Repo\InItems;

use DB;
use App\InItem;

class EloquentInItem implements InItemRepository
{
    /**
     * @var InItem
     */
    private $model;

    /**
     * EloquentInItem constructor.
     * @param InItem $model
     */
    public function __construct(InItem $model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */

    /**
     * @param array $attribute
     * @return mixed
     */
    public function create(array $attribute)
    {
        $save = $this->model->create($attribute);
        return $save;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        $save = $this->model->find($id);
        $save->delete();
        return $save;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->model
            ->join('products','in_items.product_id','=','products.id')
            ->join('codes','products.id','=','codes.product_id')
            ->selectRaw('codes.label as code,
            products.name as name,
            in_items.quantity as qty,in_items.id as id,
            in_items.created_at as created')
            ->orderBy('created','DESC')
            ->get();
    }
}