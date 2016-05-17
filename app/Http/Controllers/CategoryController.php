<?php

namespace App\Http\Controllers;

use App\Procedure\Categories\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * @var Category
     */
    private $categoryProceed;
    /**
     * @var Request
     */
    private $request;

    /**
     * CategoryController constructor.
     * @param Category $categoryProceed
     * @param Request $request
     */
    public function __construct(Category $categoryProceed, Request $request)
    {
        $this->categoryProceed = $categoryProceed;
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Backend.pages.categories.index')->with(['categories'=>$this->categoryProceed->index()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        if(!$this->request['category_id'])
        {
            $category_id = 0;
        }else{
            $category_id=$this->request['category_id'];
        }
        $data =[
            'name'=>$this->request['name'],
            'description'=>$this->request['description'],
            'parent'=>$this->request['parent'],
            'sort_order'=>$this->request['sort_order'],
            'status'=>$this->request['status'],
            'category_id'=>$category_id
        ];
        $this->categoryProceed->create($data);
        return redirect('/shopping-frpi/backend/category/');
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
        return view('backend.pages.categories.edit')->with(['category'=>$this->categoryProceed->edit($id)]);
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
//        dd($this->request->all());
        if(!$this->request['category_id'])
        {
            $category_id = 0;
        }else{
            $category_id=$this->request['category_id'];
        }
        $data =[
            'id'=>$this->request['id'],
            'name'=>$this->request['name'],
            'description'=>$this->request['description'],
            'parent'=>$this->request['parent'],
            'sort_order'=>$this->request['sort_order'],
            'status'=>$this->request['status'],
            'category_id'=>$category_id
        ];
        $this->categoryProceed->update($data);
        return redirect('/shopping-frpi/backend/category/');
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
