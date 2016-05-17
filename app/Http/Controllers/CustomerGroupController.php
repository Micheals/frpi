<?php

namespace App\Http\Controllers;

use App\Procedure\Customers\CustomerGroup;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CustomerGroupController extends Controller
{
    /**
     * @var CustomerGroup
     */
    private $customerGroupProceed;
    /**
     * @var Request
     */
    private $request;

    /**
     * CustomerGroupController constructor.
     * @param CustomerGroup $customerGroupProceed
     * @param Request $request
     */
    public function __construct(CustomerGroup $customerGroupProceed,Request $request)
    {
        $this->customerGroupProceed = $customerGroupProceed;
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.customers-group.index')->with(['customerGroups'=>$this->customerGroupProceed->index()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.customers-group.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->customerGroupProceed->create($this->request->all());
        return redirect('/shopping-frpi/backend/customers-group/');
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
        return view('backend.pages.customers-group.edit')->with(['customerGroup'=>$this->customerGroupProceed->edit($id)]);
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
        $this->customerGroupProceed->update($this->request->all());
        return redirect('/shopping-frpi/backend/customers-group/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
