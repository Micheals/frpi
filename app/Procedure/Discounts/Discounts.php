<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/24/2016
 * Time: 2:38 PM
 */

namespace App\Procedure\Discounts;


use App\Repo\Discounts\DiscountRepository;

class Discounts
{
    /**
     * @var DiscountRepository
     */
    private $repo;

    /**
     * Discounts constructor.
     * @param DiscountRepository $repo
     */
    public function __construct(DiscountRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * @param $data
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