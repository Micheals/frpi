<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/22/2016
 * Time: 8:42 PM
 */

namespace App\Repo\Discounts;


use App\Discount;

class EloquentDiscount implements DiscountRepository
{
    /**
     * @var Discount
     */
    private $model;

    /**
     * EloquentDiscount constructor.
     * @param Discount $model
     */
    public function __construct(Discount $model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->model->find($id);
    }

    /**
     * @param array $attribute
     * @return mixed
     */
    public function create(array $attribute)
    {
        $save = $this->model->create($attribute);
        $save->products()->sync([$attribute['product_id']]);
        $save->customer_groups()->sync([$attribute['customerGroups_list']]);
        return $save;
    }

    /**
     * @param $id
     * @param array $attribute
     * @return mixed
     */
    public function update($id, array $attribute)
    {
        $save = $this->model->find($id);
        return $save->update($attribute);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }
}