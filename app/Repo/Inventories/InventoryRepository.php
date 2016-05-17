<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 5/13/2016
 * Time: 7:08 PM
 */

namespace App\Repo\Inventories;


interface InventoryRepository
{
    /**
     * @return mixed
     */
    public function getInventory();
}