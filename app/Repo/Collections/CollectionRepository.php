<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 5/14/2016
 * Time: 11:16 AM
 */

namespace App\Repo\Collections;


interface CollectionRepository
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
    public function update($id,array $attribute);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);
}