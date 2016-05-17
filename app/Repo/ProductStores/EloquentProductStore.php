<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/27/2016
 * Time: 1:38 PM
 */

namespace App\Repo\ProductStores;


use App\ProductStore;

class EloquentProductStore implements ProductStoreRepository
{
    /**
     * @var ProductStore
     */
    private $model;

    /**
     * EloquentProductStore constructor.
     * @param ProductStore $model
     */
    public function __construct(ProductStore $model)
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
     * @param $product_id
     * @return mixed
     */
    public function getByProductId($product_id)
    {
        return $this->model->whereProductId($product_id)->get();
    }

    /**
     * @param $transaction_id
     * @return mixed
     */
    public function getByTransactionId($transaction_id)
    {
        return $this->model->whereTransactionId($transaction_id)->get();
    }

    /**
     * @param $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }

    public function update($id, array $attributes)
    {
        $save = $this->model->find($id);
        $save->update($attributes);
        return $save;
    }
}