<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 5/13/2016
 * Time: 8:55 PM
 */

namespace App\Repo\OutItems;


use App\OutItem;

class EloquentOutItem implements OutItemRepository
{
    /**
     * @var OutItem
     */
    private $model;

    /**
     * EloquentOutItem constructor.
     */
    public function __construct(OutItem $model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->model
            ->join('products','out_items.product_id','=','products.id')
            ->join('codes','products.id','=','codes.product_id')
            ->selectRaw('codes.label as code,
            products.name as name,
            out_items.quantity as qty,out_items.id as id,
            out_items.created_at as created')
            ->orderBy('created','DESC')
            ->get();
    }

    /**
     * @param array $attribute
     * @return mixed
     */
    public function create(array $attribute)
    {
        $save = $this->model->create($attribute);
        return $save;
    }
}