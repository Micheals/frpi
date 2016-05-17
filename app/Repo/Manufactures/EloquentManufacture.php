<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/22/2016
 * Time: 9:01 PM
 */

namespace App\Repo\Manufactures;


use App\Manufacture;

class EloquentManufacture implements ManufactureRepository
{
    /**
     * @var Manufacture
     */
    private $model;

    /**
     * EloquentManufacture constructor.
     * @param Manufacture $model
     */
    public function __construct(Manufacture $model)
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

    /**
     * @return mixed
     */
    public function select()
    {
        return $this->model->lists('name','id');
    }

}