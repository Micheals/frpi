<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/24/2016
 * Time: 3:49 PM
 */

namespace App\Procedure\Images;


use App\Repo\Images\ImageRepository;

class Image
{
    /**
     * @var ImageRepository
     */
    private $repo;

    /**
     * Image constructor.
     * @param ImageRepository $repo
     */
    public function __construct(ImageRepository $repo)
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
     */
    public function delete($id)
    {
        return $this->repo->delete($id);
    }

    public function show($id)
    {
        return $this->repo->getById($id);
    }
}