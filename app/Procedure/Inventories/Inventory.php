<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 5/13/2016
 * Time: 7:20 PM
 */

namespace App\Procedure\Inventories;


use App\Repo\Inventories\InventoryRepository;

class Inventory
{
    /**
     * @var InventoryRepository
     */
    private $repo;

    /**
     * Inventory constructor.
     * @param InventoryRepository $repo
     */
    public function __construct(InventoryRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->repo->getInventory();
    }
}