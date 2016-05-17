<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/27/2016
 * Time: 1:35 PM
 */

namespace App\Repo\ProductStores;


interface ProductStoreRepository
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
     * @param $product_id
     * @return mixed
     */
    public function getByProductId($product_id);

    /**
     * @param $transaction_id
     * @return mixed
     */
    public function getByTransactionId($transaction_id);

    /**
     * @param $data
     * @return mixed
     */
    public function create(array $attribute);

    public function update($id, array $attribute);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);
}