<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/22/2016
 * Time: 8:10 PM
 */

namespace App\Repo\Categories;
use App\Category;

class EloquentCategory implements CategoryRepository
{
    /**
     * @var Category
     */
    private $model;

    /**
     * EloquentCategory constructor.
     * @param Category $model
     */
    public function __construct(Category $model)
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
        if($attribute['category_id']==null  || $attribute['category_id']==0)
        {
            return $this->model->create($attribute);
        }else{
            $save = $this->model->create($attribute);
            $save->parentCategory()->sync([$attribute['category_id']]);
        }

    }

    /**
     * @param $id
     * @param array $attribute
     * @return mixed
     */
    public function update($id, array $attribute)
    {
//        dd($attribute['category_id']);
        $save = $this->model->findOrFail($id);
        if($attribute['category_id']==null || $attribute['category_id']==0)
        {
//            dd('yes');
            $save->name = $attribute['name'];
            $save->description =$attribute['description'];
            $save->parent = $attribute['parent'];
            $save->sort_order = $attribute['sort_order'];
            $save->status = $attribute['status'];
            $save->save();
            $save->parentCategory()->sync([4]);
            return $save;
        }else{
            $save->name = $attribute['name'];
            $save->description =$attribute['description'];
            $save->parent = $attribute['parent'];
            $save->sort_order = $attribute['sort_order'];
            $save->status = $attribute['status'];
            $save->save();
            $save->parentCategory()->sync([$attribute['category_id']]);
            return $save;
        }

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

    /**
     * @return mixed
     */
    public function CountGroup()
    {
        return $this->model->groupBy('id')->get();
    }
}