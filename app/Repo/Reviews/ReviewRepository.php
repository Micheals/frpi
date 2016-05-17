<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/23/2016
 * Time: 1:10 AM
 */

namespace App\Repo\Reviews;


interface ReviewRepository
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
     * @param $number
     * @return mixed
     */
    public function limit($number);

    /**
     * @param $id
     * @return mixed
     */
    public function whereProductId($id);
}