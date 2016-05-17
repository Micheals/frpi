<?php

namespace App\Http\Controllers;

use App\Procedure\InItems\InItem;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class InItemController extends Controller
{
    /**
     * @var InItem
     */
    private $inItemProceed;
    /**
     * @var Request
     */
    private $request;

    /**
     * InItemController constructor.
     * @param InItem $inItemProceed
     * @param Request $request
     */
    public function __construct(InItem $inItemProceed,Request $request)
    {
        $this->inItemProceed = $inItemProceed;
        $this->request = $request;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.inventories.InItems.index')->with(['products' => $this->inItemProceed->index()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.inventories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->inItemProceed->create($this->request->all());
        Session::flash('message', 'Successfully insert quantity.');
        return redirect()->back();
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
        $this->inItemProceed->delete($this->request['id']);
        Session::flash('message', 'Successfully remove the item from inventory.');
        return redirect()->back();
    }
}
