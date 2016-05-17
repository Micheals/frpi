<?php

namespace App\Http\Controllers;

use App\Procedure\Manufactures\Manufacture;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ManufactureController extends Controller
{
    /**
     * @var Manufacture
     */
    private $manufactureProceed;
    /**
     * @var Request
     */
    private $request;

    /**
     * ManufactureController constructor.
     * @param Manufacture $manufactureProceed
     * @param Request $request
     */
    public function __construct(Manufacture $manufactureProceed, Request $request)
    {
        $this->manufactureProceed = $manufactureProceed;
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.manufactures.index')->with(['manufactures'=>$this->manufactureProceed->index()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.manufactures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $image = $this->uploadImage();
        $data = [
            'name'=>$this->request['name'],
            'sort_order'=>$this->request['sort_order'],
            'seo_keyword'=>$this->request['seo_keyword'],
            'image'=>$image['image']
        ];
        $this->manufactureProceed->create($data);
        return redirect('shopping-frpi/backend/manufacture');
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
        return view('backend.pages.manufactures.edit')->with(['manufacture'=>$this->manufactureProceed->edit($id)]);
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
        $this->manufactureProceed->update($this->request->all());
        return redirect('shopping-frpi/backend/manufacture');
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

    /**
     * @return array
     */
    public function uploadImage()
    {
        $image      =   $this->request->file('image');
        if(empty($image))
        {
            return ['image'=>''];
        }
        $filename   =   uniqid().$image->getClientOriginalName();
        if(!file_exists('images/manufactures'))
        {
            mkdir('images/manufactures',0777,true);
        }
        $image->move('images/manufactures',$filename);
        return ['image'=>'images/manufactures/'.$filename];
    }
}
