<?php

namespace App\Http\Controllers;

use App\Procedure\Tags\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * @var Request
     */
    private $request;
    /**
     * @var Tag
     */
    private $tagProceed;

    /**
     * TagController constructor.
     * @param Request $request
     * @param Tag $tagProceed
     */
    public function __construct(Request $request, Tag $tagProceed)
    {
        $this->request = $request;
        $this->tagProceed = $tagProceed;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.tags.index')->with('tags',$this->tagProceed->index());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->tagProceed->create($this->request->all());
        return redirect('/shopping-frpi/backend/tags/');
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
        return view('backend.pages.tags.edit')->with('tag',$this->tagProceed->edit($id));
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
        $this->tagProceed->update($this->request->all());
        return redirect('/shopping-frpi/backend/tags/');
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
