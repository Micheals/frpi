<?php

/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/27/2016
 * Time: 12:13 PM
 */
namespace App\Procedure\Transactions;
use App\Repo\Transactions\TransactionRepository;

class Transaction
{
    /**
     * @var TransactionRepository
     */
    private $tranRepo;

    /**
     * Transaction constructor.
     * @param TransactionRepository $tranRepo
     */
    public function __construct(TransactionRepository $tranRepo)
    {
        $this->tranRepo = $tranRepo;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->tranRepo->getAll();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->tranRepo->getById($id);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->tranRepo->create($data);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function update($data)
    {
        return $this->tranRepo->update($data['id'],$data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->tranRepo->delete($id);
    }
}