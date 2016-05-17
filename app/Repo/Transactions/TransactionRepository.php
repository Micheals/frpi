<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/27/2016
 * Time: 12:03 PM
 */

namespace App\Repo\Transactions;


interface TransactionRepository
{
    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id);

    /**
     * @param array $attribute
     * @return mixed
     */
    public function create(array $attribute);

    /**
     * @param $id
     * @param array $attribute
     * @return mixed
     */
    public function update($id,array $attribute);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);


}