<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/27/2016
 * Time: 12:03 PM
 */

namespace App\Repo\Transactions;


use App\Transaction;

class EloquentTransaction implements TransactionRepository
{
    /**
     * @var Transaction
     */
    private $model;

    /**
     * EloquentTransaction constructor.
     * @param Transaction $model
     */
    public function __construct(Transaction $model)
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
        return $this->model->create($attribute);
    }

    /**
     * @param $id
     * @param array $attribute
     * @return mixed
     */
    public function update($id, array $attribute)
    {
        return $this->model->find($id)->update($id,$attribute)->products()->sync($attribute['product_list']);
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