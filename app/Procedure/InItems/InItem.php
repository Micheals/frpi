<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 5/5/2016
 * Time: 4:53 PM
 */

namespace App\Procedure\InItems;


use App\Repo\InItems\InItemRepository;

class InItem
{
    /**
     * @var InItemRepository
     */
    private $repo;

    /**
     * Inventory constructor.
     * @param InItemRepository $repo
     */
    public function __construct(InItemRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->repo->getAll();
    }

    /**
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->repo->create($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->repo->delete($id);
    }
}