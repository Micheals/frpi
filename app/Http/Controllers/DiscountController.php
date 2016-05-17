<?php

namespace App\Http\Controllers;

use App\Procedure\Customers\CustomerGroup;
use App\Procedure\Discounts\Discounts;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DiscountController extends Controller
{
    /**
     * @var Discounts
     */
    private $discountProceed;
    /**
     * @var Request
     */
    private $request;
    /**
     * @var CustomerGroup
     */
    private $customerGroupProceed;

    /**
     * DiscountController constructor.
     * @param Discounts $discountProceed
     * @param CustomerGroup $customerGroupProceed
     * @param Request $request
     */
    public function __construct(Discounts $discountProceed, CustomerGroup $customerGroupProceed, Request $request)
    {
        $this->discountProceed = $discountProceed;
        $this->request = $request;
        $this->customerGroupProceed = $customerGroupProceed;
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
        $discount = $this->discountProceed->create($this->request->all());
        $customerGroup = $this->customerGroupProceed->show($this->request['customerGroups_list']);
        return response()->json([
            'customerGroup'=>$customerGroup->label,
            'quantity'=>$this->request['quantity'],
            'priority'=>$this->request['priority'],
            'price'=>$this->request['price'],
            'start_at'=>$this->request['start_at'],
            'end_at'=>$this->request['end_at'],
            'id'=>$discount->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $id = $this->request['id'];
        $this->discountProceed->delete($id);
        return response()->json(['result'=>true]);
    }
}
