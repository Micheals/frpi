<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/27/2016
 * Time: 1:44 PM
 */

namespace App\Procedure\ProductStores;


use App\Repo\ProductStores\ProductStoreRepository;

class ProductStore
{
    /**
     * @var ProductStoreRepository
     */
    private $repo;

    /**
     * ProductStore constructor.
     * @param ProductStoreRepository $repo
     */
    public function __construct(ProductStoreRepository $repo)
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
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->repo->getById($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getByProductId($id)
    {
        return $this->repo->getByProductId($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getByTransactionId($id)
    {
        return $this->repo->getByTransactionId($id);
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
     * @param $data
     * @return mixed
     */
    public function update($data)
    {
        return $this->repo->update($data['id'],$data);
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