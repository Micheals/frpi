<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/24/2016
 * Time: 6:25 PM
 */

namespace App\Procedure\Categories;


use App\Repo\Categories\CategoryRepository;

class Category
{
    /**
     * @var CategoryRepository
     */
    private $repo;

    /**
     * Category constructor.
     * @param CategoryRepository $repo
     */
    public function __construct(CategoryRepository $repo)
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
     */
    public function edit($id)
    {
        return $this->repo->getById($id);
    }

    public function update($data)
    {
        return $this->repo->update($data['id'],$data);
    }

    public function show($id)
    {
        return $this->repo->getById($id);
    }

    public function countGroup()
    {
        return $this->repo->CountGroup();
    }
}