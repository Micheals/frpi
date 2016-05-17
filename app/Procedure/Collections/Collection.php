<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 5/14/2016
 * Time: 11:52 AM
 */

namespace App\Procedure\Collections;


use App\Repo\Collections\CollectionRepository;

class Collection
{
    /**
     * @var CollectionRepository
     */
    private $repo;

    /**
     * Collection constructor.
     * @param CollectionRepository $repo
     */
    public function __construct(CollectionRepository $repo)
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

    public function create($data)
    {
        return $this->repo->create($data);
    }

    public function edit($id)
    {
        return $this->repo->getById($id);
    }
}