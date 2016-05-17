<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/22/2016
 * Time: 8:01 PM
 */

namespace App\Repo\Attributes;
use App\Attribute;

class EloquentAttribute implements AttributeRepository
{
    /**
     * @var Attribute
     */
    private $model;

    /**
     * EloquentAttribute constructor.
     * @param Attribute $model
     */
    public function __construct(Attribute $model)
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
        return $this->model->findOrFail($id);
    }

    /**
     * @param array $attribute
     * @return mixed
     */
    public function create(array $attribute)
    {
        $save = new $this->model;
        $save->label = $attribute['label'];
        $save->sort_order = $attribute['sort_order'];
        $save->save();
        $save->attr_groups()->sync([$attribute['attrGroup_list']]);
        $save->products()->sync([$attribute['product_id']]);
        return $save;
    }

    /**
     * @param $id
     * @param array $attribute
     * @return mixed
     */
    public function update($id, array $attribute)
    {
        $save = $this->model->findOrFail($id);
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
     * @param $id
     * @return mixed
     */
    public function whereProductId($id)
    {
        return $this->model->where('product_id',$id)->get();
    }
}