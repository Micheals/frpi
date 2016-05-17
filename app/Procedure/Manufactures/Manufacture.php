<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/25/2016
 * Time: 11:33 AM
 */

namespace App\Procedure\Manufactures;


use App\Repo\Manufactures\ManufactureRepository;

class Manufacture
{
    /**
     * @var ManufactureRepository
     */
    private $repo;

    /**
     * Manufacture constructor.
     * @param ManufactureRepository $repo
     */
    public function __construct(ManufactureRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        return $this->repo->getAll();
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
    public function edit($id)
    {
        return $this->repo->getById($id);
    }

    /**
     * @param $data
     */
    public function update($data)
    {
        return $this->repo->update($data['id'],$data);
    }
}