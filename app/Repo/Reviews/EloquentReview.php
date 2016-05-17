<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/23/2016
 * Time: 1:13 AM
 */

namespace App\Repo\Reviews;


use App\Review;
use DB;
class EloquentReview implements ReviewRepository
{
    /**
     * @var Review
     */
    private $model;

    /**
     * EloquentReview constructor.
     * @param Review $model
     */
    public function __construct(Review $model)
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
        $save->products()->sync([$attribute['product_list']]);
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
        $save->update($attribute);
        return $save->products()->sync([$attribute['product_list']]);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }

    /**
     * @param $number
     * @return mixed
     */
    public function limit($number)
    {
        return $this->model->all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function whereProductId($id)
    {
        return $this->model->whereProductId($id)->get();
    }
}