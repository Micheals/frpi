<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/22/2016
 * Time: 4:09 PM
 */

namespace App\Procedure\Attributes;


use App\Repo\AttrGroup\AttrGroupRepository;

class AttrGroupCRUD
{

    /**
     * @var AttrGroupRepository
     */
    private $repo;

    /**
     * @param AttrGroupRepository $repo
     */
    public function __construct(AttrGroupRepository $repo)
    {

        $this->repo = $repo;
    }

    /**
     * @param $data
     */
    public function store($data)
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

    public function show($id)
    {
        return $this->repo->getById($id);
    }

    public function update($data)
    {
        return $this->repo->update($data['id'],$data);
    }
}