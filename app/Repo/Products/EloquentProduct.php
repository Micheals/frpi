<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/22/2016
 * Time: 9:09 PM
 */

namespace App\Repo\Products;


use App\Product;
use Illuminate\Support\Facades\DB;

class EloquentProduct implements ProductRepository
{
    /**
     * @var Product
     */
    private $model;

    /**
     * EloquentRepository constructor.
     * @param Product $model
     */
    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->model->orderBy('id','DESC')->get();
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
        $save->manufacturers()->sync($attribute['manufacture_list']);
        $save->categories()->sync($attribute['category_list']);
        $save->tags()->sync($attribute['tag_list']);
        if($attribute['product_list']!=0)
        {
            $save->relatedProducts()->sync($attribute['product_list']);
        }
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
        return $save;
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
    public function productDisplay()
    {

    }

    /**
     * @return mixed
     */
    public function threeProducts()
    {
        return $this->model->take(3)->orderBy(DB::raw('RAND()'))->orderBy('updated_at','DESC')->get();
    }

    /**
     * @param $number
     * @return mixed
     */
    public function productHomeLimit($number)
    {
        return $this->model->take($number)->orderBy(DB::raw('RAND()'))->orderBy('updated_at','DESC')->get();
    }
}