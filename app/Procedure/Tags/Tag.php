<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/25/2016
 * Time: 3:29 PM
 */

namespace App\Procedure\Tags;


use App\Repo\Tags\TagRepository;

class Tag
{
    /**
     * @var TagRepository
     */
    private $repo;

    /**
     * Tag constructor.
     * @param TagRepository $repo
     */
    public function __construct(TagRepository $repo)
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
}