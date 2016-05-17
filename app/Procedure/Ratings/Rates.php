<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/28/2016
 * Time: 8:09 PM
 */

namespace App\Procedure\Ratings;


use App\Repo\Ratings\RateRepository;

class Rates
{
    /**
     * @var RateRepository
     */
    private $repo;

    /**
     * Rates constructor.
     * @param RateRepository $repo
     */
    public function __construct(RateRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     *
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
        return $this->repo->update($data['review_id'],$data);
    }
}