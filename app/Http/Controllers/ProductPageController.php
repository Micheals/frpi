<?php

namespace App\Http\Controllers;

use App\Procedure\Products\View;
use App\Procedure\ProductStores\ProductStore;
use App\Procedure\Transactions\Transaction;
use App\Procedure\Categories\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ProductPageController extends Controller
{
    /**
     * @var Request
     */
    private $request;
    /**
     * @var Transaction
     */
    private $transactionProceed;
    /**
     * @var ProductStore
     */
    private $productStoreProceed;
    /**
     * @var View
     */
    private $viewProceed;

    private $categoryProceed;

    /**
     * ProductPageController constructor.
     * @param Request $request
     * @param View $viewProceed
     * @internal param Transaction $transactionProceed
     * @internal param ProductStore $productStoreProceed
     */
    public function __construct(Request $request,
                                View $viewProceed,
                                Transaction $transactionProceed,
                                ProductStore $productStoreProceed,
                                Category $categoryProceed)
    {
        $this->request = $request;
        $this->transactionProceed = $transactionProceed;
        $this->productStoreProceed = $productStoreProceed;
        $this->viewProceed = $viewProceed;
        $this->categoryProceed = $categoryProceed;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        if(empty(Session::get('transaction_id'))||!Session::get('transaction_id'))
        {
            $transaction = $this->transactionProceed->create($this->request->all());
            Session::put('transaction_id',$transaction->id);
            $data = [
                'product_id'=>$this->request['product_id'],
                'transaction_id'=>$transaction->id,
                'quantity'=>1
            ];
            $this->productStoreProceed->create($data);
            return redirect()->back();
        }else{
            $data = [
                'product_id'=>$this->request['product_id'],
                'transaction_id'=>Session::get('transaction_id'),
                'quantity'=>1
            ];
            $this->productStoreProceed->create($data);
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('frontend.pages.productpage')->with('product',$this->viewProceed->whereProductId($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $data = $this->request->all();

        $this->productStoreProceed->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $this->productStoreProceed->delete($this->request['id']);
        return redirect()->back();
    }

    public function category($id)
    {
        $category = $this->categoryProceed->show($id);
//        dd($this->categoryProceed->countGroup());
        return view('frontend.pages.category')->with(['category'=>$category,'countGroup'=>$this->categoryProceed->countGroup()]);
    }
}