<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/24/2016
 * Time: 12:04 PM
 */

namespace App\Procedure\Attributes;


use App\Repo\Attributes\AttributeRepository;

class Attributes
{
    /**
     * @var AttributeRepository
     */
    private $repo;

    /**
     * Attributes constructor.
     * @param AttributeRepository $repo
     */
    public function __construct(AttributeRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     *
     */
    public function index()
    {

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
     */
    public function delete($id)
    {
        $this->repo->delete($id);
        return true;
    }
}