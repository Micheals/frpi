<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/22/2016
 * Time: 8:35 PM
 */

namespace App\Repo\Dimensions;


use App\Dimension;

class EloquentDimension implements DimensionRepository
{
    /**
     * @var Dimension
     */
    private $model;

    /**
     * EloquentDimension constructor.
     * @param Dimension $model
     */
    public function __construct(Dimension $model)
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
        $save = new $this->model;
        $save->height = $attribute['height'];
        $save->width = $attribute['width'];
        $save->length = $attribute['length'];
        $save->data_id = $attribute['data_id'];
        $save->save();
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