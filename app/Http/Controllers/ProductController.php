<?php

namespace App\Http\Controllers;

use App\Procedure\Products\Store;
use App\Procedure\Products\View;
use App\Procedure\Ratings\Rates;
use App\Procedure\Reviews\Review;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * @var View
     */
    private $viewProceed;
    /**
     * @var Request
     */
    private $request;
    /**
     * @var Store
     */
    private $storeProceed;
    /**
     * @var Review
     */
    private $reviewProceed;
    /**
     * @var Rates
     */
    private $ratesProceed;

    /**
     * ProductController constructor.
     * @param View $viewProceed
     * @param Request $request
     * @param Store $storeProceed
     * @param Review $reviewProceed
     * @param Rates $ratesProceed
     */
    public function __construct(View $viewProceed,
                                Request $request,
                                Store $storeProceed,
                                Review $reviewProceed,
                                Rates $ratesProceed)
    {
        $this->viewProceed = $viewProceed;
        $this->request = $request;
        $this->storeProceed = $storeProceed;
        $this->reviewProceed = $reviewProceed;
        $this->ratesProceed = $ratesProceed;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.products.index')->with(['products'=>$this->viewProceed->index()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Session::forget('product_id');

        return view('backend.pages.products.create')->with(['product'=>null]);
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

        if(count($this->viewProceed->index())==0)
        {
            $product_list = 0;
        }else{
            $product_list = $this->request['product_list'];
        }
        $data = [
            'name'=>$this->request['name'],
            'description'=>$this->request['description'],
            'meta_tag_title'=>$this->request['meta_tag_title'],
            'meta_tag_description'=>$this->request['meta_tag_description'],
            'meta_tag_keywords'=>$this->request['meta_tag_keywords'],
            'tag_list'=>$this->request['tag_list'],
            'image'=>$image['image'],
            'model'=>$this->request['model'],
            'price'=>$this->request['price'],
            'tax_price'=>$this->request['tax_price'],
            'quantity'=>$this->request['quantity'],
            'minimum_quantity'=>$this->request['minimum_quantity'],
            'seo_keyword'=>$this->request['seo_keyword'],
            'date_available'=>$this->request['date_available'],
            'weight'=>$this->request['weight'],
            'status'=>$this->request['status'],
            'manufacture_list'=>$this->request['manufacture_list'],
            'category_list'=>$this->request['category_list'],
            'product_list'=>$product_list,
            'width'=>$this->request['width'],
            'length'=>$this->request['length'],
            'height'=>$this->request['height'],
            'weight_class_label'=>$this->request['weight_class_label'],
            'length_class_label'=>$this->request['length_class_label'],
            'code'=>$this->request['code']
        ];
        $product = $this->storeProceed->create($data);
        $reviewData = [
            'image'=>'/assets/images/user.png',
            'product_list'=>$product->id,
            'title'=>'Good Item',
            'ratings'=>'4',
            'author'=>'Author',
            'text'=>'This is good Item',
            'product_id'=>$product->id
        ];
        Session::put(['product_id'=>$product->id]);
        $reviewId = $this->reviewProceed->create($reviewData);
        $reviews=$this->reviewProceed->whereProductId($product->id);
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
        return redirect()->route('next-page');
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
        return view('backend.pages.products.edit')->with('product',$this->viewProceed->whereProductId($id));
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
        $image = $this->uploadImage();

        if(count($this->viewProceed->index())==0)
        {
            $product_list = 0;
        }else{
            $product_list = $this->request['product_list'];
        }
        $data = [
            'id'=>$this->request['id'],
            'name'=>$this->request['name'],
            'description'=>$this->request['description'],
            'meta_tag_title'=>$this->request['meta_tag_title'],
            'meta_tag_description'=>$this->request['meta_tag_description'],
            'meta_tag_keywords'=>$this->request['meta_tag_keywords'],
            'tag_list'=>$this->request['tag_list'],
            'image'=>$image['image'],
            'model'=>$this->request['model'],
            'price'=>$this->request['price'],
            'tax_price'=>$this->request['tax_price'],
            'quantity'=>$this->request['quantity'],
            'minimum_quantity'=>$this->request['minimum_quantity'],
            'seo_keyword'=>$this->request['seo_keyword'],
            'date_available'=>$this->request['date_available'],
            'weight'=>$this->request['weight'],
            'status'=>$this->request['status'],
            'manufacture_list'=>$this->request['manufacture_list'],
            'category_list'=>$this->request['category_list'],
            'product_list'=>$product_list,
            'width'=>$this->request['width'],
            'length'=>$this->request['length'],
            'height'=>$this->request['height'],
            'weight_class_label'=>$this->request['weight_class_label'],
            'length_class_label'=>$this->request['length_class_label'],
            'code'=>$this->request['code']
        ];
        $this->storeProceed->update($data);
        return redirect('shopping-frpi/backend/products');
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
     * @return View|\Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function nextPage()
    {
        if(empty(Session::get('product_id')))
        {
            return redirect()->back();
        }
        $product = $this->viewProceed->whereProductId(Session::get('product_id'));

        return view('backend.pages.products.next-page',compact('product'));
    }


    /**
     * @return array
     */
    public function uploadImage()
    {
        $image      =   $this->request->file('image');
        if(empty($image))
        {
            return ['image'=>$this->request['image_old']];
        }
        $filename   =   uniqid().$image->getClientOriginalName();

        if(!file_exists('images/items'))
        {
            mkdir('images/items',0777,true);
        }
        $image->move('images/items',$filename);
        return ['image'=>'images/items/'.$filename];
    }
}
