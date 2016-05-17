<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/25/2016
 * Time: 1:20 PM
 */

namespace App\Procedure\Customers;


use App\Repo\CustomerGroup\CustomerGroupRepository;

class CustomerGroup
{
    /**
     * @var CustomerGroupRepository
     */
    private $repo;

    /**
     * CustomerGroup constructor.
     * @param CustomerGroupRepository $repo
     */
    public function __construct(CustomerGroupRepository $repo)
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
     * @param $id
     * @return mixed
     */
    public function show($id)
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
}