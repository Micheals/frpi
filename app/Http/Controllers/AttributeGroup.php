<?php

namespace App\Http\Controllers;


use App\Procedure\Attributes\AttrGroupCRUD;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AttributeGroup extends Controller
{
    /**
     * @var Request
     */
    private $request;
    /**
     * @var AttrGroup
     */
    private $attrGroup;
    /**
     * @var InsertAttrGroup
     */
    private $attrProceed;

    /**
     * AttributeGroup constructor.
     * @param AttrGroupCRUD $attrProceed
     * @param Request $request
     */
    public function __construct(AttrGroupCRUD $attrProceed, Request $request)
    {
        $this->request = $request;
        $this->attrProceed = $attrProceed;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.attributes-group.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.attributes-group.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->attrProceed->store($this->request->all());
        return redirect('/shopping-frpi/backend/attr-group/');
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
        return view('backend.pages.attributes-group.edit')->with(['attrGroup'=>$this->attrProceed->edit($id)]);
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
        $this->attrProceed->update($this->request->all());
        return redirect('/shopping-frpi/backend/attr-group/');
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
