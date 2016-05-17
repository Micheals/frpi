<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/26/2016
 * Time: 7:30 PM
 */

namespace App\Procedure\Reviews;


use App\Repo\Reviews\ReviewRepository;

class Review
{
    /**
     * @var ReviewRepository
     */
    private $repo;

    /**
     * Review constructor.
     * @param ReviewRepository $repo
     */
    public function __construct(ReviewRepository $repo)
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
    public function edit($id)
    {
        return $this->repo->getById($id);
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

    /**
     * @param $number
     * @return mixed
     */
    public function limit($number)
    {
        return $this->repo->limit($number);
    }

    public function whereProductId($id)
    {
        return $this->repo->whereProductId($id);
    }
}