<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/27/2016
 * Time: 4:53 PM
 */

namespace App\Http\Selectors;


use App\Repo\ProductStores\ProductStoreRepository;
use Illuminate\Support\Facades\Session;

class Transactions
{
    /**
     * @var TransactionRepository
     */
    private $model;

    /**
     * Transactions constructor.
     * @param TransactionRepository $model
     */
    public function __construct(ProductStoreRepository $model)
    {
        $this->model = $model;
    }

    /**
     * @param $view
     */
    public function compose($view)
    {
        $view->with(['productStores'=>$this->model->getByTransactionId(Session::get('transaction_id'))]);
    }

    /**
     * @param $view
     */
    public function cart($view)
    {
        $view->with(['productCarts'=>$this->model->getByTransactionId(Session::get('transaction_id'))]);
    }

    /**
     * @param $view
     */
    public function checkOut($view)
    {
        $view->with(['checkOutProducts'=>$this->model->getByTransactionId(Session::get('transaction_id'))]);
    }
}