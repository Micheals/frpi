<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/22/2016
 * Time: 9:07 PM
 */

namespace App\Repo\Products;


interface ProductRepository
{
    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id);

    /**
     * @param array $attribute
     * @return mixed
     */
    public function create(array $attribute);

    /**
     * @param $id
     * @param array $attribute
     * @return mixed
     */
    public function update($id, array $attribute);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * @return mixed
     */
    public function select();

    /**
     * @return mixed
     */
    public function threeProducts();

    /**
     * @return mixed
     */
    public function productDisplay();

    /**
     * @param $number
     * @return mixed
     */
    public function productHomeLimit($number);

}