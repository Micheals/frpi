<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 5/14/2016
 * Time: 11:19 AM
 */

namespace App\Repo\Collections;


use App\Collection;

class EloquentCollection implements CollectionRepository
{
    /**
     * @var Collection
     */
    private $model;

    /**
     * EloquentCollection constructor.
     * @param Collection $model
     */
    public function __construct(Collection $model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->model->orderBy('created_at','DESC')->get();
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
        $save->products()->sync($attribute['product_list']);
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
        $save->products()->sync($attribute['product_list']);
        return $save;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        $remove = $this->model->find($id);
        $remove->delete();
        return true;
    }
}