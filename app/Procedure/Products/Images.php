<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/23/2016
 * Time: 8:49 PM
 */

namespace App\Procedure\Products;


use App\Repo\Images\ImageRepository;

class Images
{
    /**
     * @var ImageRepository
     */
    private $imageRepo;

    /**
     * Images constructor.
     * @param ImageRepository $imageRepo
     */
    public function __construct(ImageRepository $imageRepo)
    {
        $this->imageRepo = $imageRepo;
    }

    public function create($id,$data)
    {
        $this->imageRepo->create($id,$data);
    }
}