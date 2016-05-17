<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/23/2016
 * Time: 8:07 AM
 */

namespace App\Repo\Codes;


use App\Code;

class EloquentCode implements CodeRepository
{
    /**
     * @var Code
     */
    private $model;

    /**
     * EloquentRepository constructor.
     * @param Code $model
     */
    public function __construct(Code $model)
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