<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 5/5/2016
 * Time: 4:55 PM
 */

namespace App\Repo\InItems;


interface InItemRepository
{
    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param array $attribute
     * @return mixed
     */
    public function create(array $attribute);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);
}