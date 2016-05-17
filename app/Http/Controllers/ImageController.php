<?php

namespace App\Http\Controllers;

use App\Procedure\Images\Image;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    /**
     * @var Image
     */
    private $imageProceed;
    /**
     * @var Request
     */
    private $request;

    /**
     * ImageController constructor.
     * @param Image $imageProceed
     * @param Request $request
     */
    public function __construct(Image $imageProceed,Request $request)
    {
        $this->imageProceed = $imageProceed;
        $this->request = $request;
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
        $image = $this->uploadImage();
        $data=[
            'sort_order'=>$this->request['sort_order'],
            'path'=>$image['image'],
            'product_id'=>$this->request['product_id']
        ];

        $images = $this->imageProceed->create($data);
        return [
            'sort_order'=>$this->request['sort_order'],
            'path'=>$image['image'],
            'id'=>$images->id
        ];
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
        $image=$this->imageProceed->show($id);
        File::delete($image->path);
        $this->imageProceed->delete($id);
        return response()->json(['result'=>true]);
    }

    /**
     * @return array
     */
    public function uploadImage()
    {
        $image      =   $this->request->file('image');
        $filename   =   uniqid().$image->getClientOriginalName();
        if(!file_exists('images/items'))
        {
            mkdir('images/items',0777,true);
        }
        $image->move('images/items',$filename);
        return ['image'=>'images/items/'.$filename];
    }
}
