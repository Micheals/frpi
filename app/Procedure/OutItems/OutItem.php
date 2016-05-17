<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 5/13/2016
 * Time: 8:13 PM
 */

namespace App\Procedure\OutItems;


use App\Repo\OutItems\OutItemRepository;

class OutItem
{
    /**
     * @var OutItemRepository
     */
    private $repo;

    /**
     * OutItem constructor.
     * @param OutItemRepository $repo
     */
    public function __construct(OutItemRepository $repo)
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
}