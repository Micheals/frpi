<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/23/2016
 * Time: 9:03 AM
 */

namespace App\Procedure\Products;


use App\Repo\Products\ProductRepository;

class View
{
    /**
     * @var ProductRepository
     */
    private $repo;

    /**
     * View constructor.
     * @param ProductRepository $repo
     */
    public function __construct(ProductRepository $repo)
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
    public function whereProductId($id)
    {
        return $this->repo->getById($id);
    }

    /**
     *
     */
    public function productDisplay()
    {

    }

    /**
     * @return mixed
     */
    public function threeProducts()
    {
        return $this->repo->threeProducts();
    }

    /**
     * @param $number
     * @return mixed
     */
    public function limitProduct($number)
    {
        return $this->repo->productHomeLimit($number);
    }
}