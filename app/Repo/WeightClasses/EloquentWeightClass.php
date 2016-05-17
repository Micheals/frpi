<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/23/2016
 * Time: 1:35 AM
 */

namespace App\Repo\WeightClasses;


use App\WeightClass;

class EloquentWeightClass implements WeightClassRepository
{
    /**
     * @var WeightClass
     */
    private $model;

    /**
     * EloquentWeightClass constructor.
     * @param WeightClass $model
     */
    public function __construct(WeightClass $model)
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