<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 5/13/2016
 * Time: 7:11 PM
 */

namespace App\Repo\Inventories;
use DB;

class EloquentInventory implements InventoryRepository
{

    /**
     * @return mixed
     */
    public function getInventory()
    {
        return DB::table('inventory')
            ->join('products','inventory.product_id','=','products.id')
            ->join('codes','products.id','=','codes.product_id')
            ->selectRaw('codes.label as code,products.name as name,inventory.total as total')
            ->get();
    }
}