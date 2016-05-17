<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 5/13/2016
 * Time: 8:14 PM
 */

namespace App\Repo\OutItems;


interface OutItemRepository
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
}