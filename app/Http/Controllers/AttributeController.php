<?php

namespace App\Http\Controllers;

use App\Procedure\Attributes\AttrGroupCRUD;
use App\Procedure\Attributes\Attributes;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AttributeController extends Controller
{
    /**
     * @var Request
     */
    private $request;
    /**
     * @var Attributes
     */
    private $attributeProceed;
    /**
     * @var AttrGroupCRUD
     */
    private $attrGroupCRUDProceed;

    /**
     * AttributeController constructor.
     * @param Attributes $attributeProceed
     * @param AttrGroupCRUD $attrGroupCRUDProceed
     * @param Request $request
     */
    public function __construct(Attributes $attributeProceed,AttrGroupCRUD $attrGroupCRUDProceed, Request $request)
    {
        $this->request = $request;
        $this->attributeProceed = $attributeProceed;
        $this->attrGroupCRUDProceed = $attrGroupCRUDProceed;
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
        $attr=$this->attributeProceed->create($this->request->all());
        $groupLabel =$this->attrGroupCRUDProceed->show($this->request['attrGroup_list']);
        if($this->request->ajax())
        {
            return response()->json(['label'=>$this->request['label'],
                'sort_order'=>$this->request['sort_order'],
                'groupLabel'=>$groupLabel->label,'id'=>$attr->id,'product_id'=>$this->request['product_id']]);
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
        $id=$this->request['id'];
        $this->attributeProceed->delete($id);
        return response()->json(['result'=>true]);
    }
}
