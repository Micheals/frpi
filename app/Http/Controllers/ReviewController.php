<?php

namespace App\Http\Controllers;

use App\Procedure\Ratings\Rates;
use App\Procedure\Reviews\Review;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    /**
     * @var Review
     */
    private $reviewProceed;
    /**
     * @var Request
     */
    private $request;
    /**
     * @var Rates
     */
    private $ratesProceed;

    /**
     * ReviewController constructor.
     * @param Review $reviewProceed
     * @param Request $request
     * @param Rates $ratesProceed
     */
    public function __construct(Review $reviewProceed,Request $request,Rates $ratesProceed)
    {
        $this->reviewProceed = $reviewProceed;
        $this->request = $request;
        $this->ratesProceed = $ratesProceed;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.reviews.index')->with(['reviews'=>$this->reviewProceed->index()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.reviews.create');
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
            'image'=>$image['image'],
            'author'=>$this->request['author'],
            'product_list'=>$this->request['product_list'],
            'text'=>$this->request['text'],
            'ratings'=>$this->request['rating'],
            'product_id'=>$this->request['product_list']
        ];
        $reviewId = $this->reviewProceed->create($data);
        $reviews=$this->reviewProceed->whereProductId($this->request['product_list']);
        $total=0;
        $totalMember=count($reviews);
            foreach($reviews as $review){
                $total += $review->ratings;
            }
        $score = $total/$totalMember;
        $rateData = [
            'score'=>$score,
            'review_id'=>$reviewId->id
        ];
        $this->ratesProceed->create($rateData);
        return redirect('/shopping-frpi/backend/reviews');
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
        return view('backend.pages.reviews.edit')->with(['review'=>$this->reviewProceed->edit($id)]);
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
        $reviewId = $this->reviewProceed->update($this->request->all());

        $reviews=$this->reviewProceed->whereProductId($this->request['product_id']);
        $total=0;
        $totalMember=count($reviews);
        foreach($reviews as $review){
            $total += $review->ratings;
        }
        $score = $total/$totalMember;
        $rateData = [
            'score'=>$score,
            'review_id'=>$reviewId->id
        ];
        $this->ratesProceed->update($rateData);
        return redirect('shopping-frpi/backend/reviews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $this->reviewProceed->delete($this->request['id']);
        return view('shopping-frpi/backend/reviews');
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
