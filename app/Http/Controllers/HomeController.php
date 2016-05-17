<?php

namespace App\Http\Controllers;

use App\Procedure\Products\Store;
use App\Procedure\Products\View;
use App\Procedure\Reviews\Review;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    /**
     * @var Request
     */
    private $request;
    /**
     * @var Review
     */
    private $reviewProceed;
    /**
     * @var View
     */
    private $viewProceed;

    /**
     * HomeController constructor.
     * @param Request $request
     * @param Review $reviewProceed
     * @param View $viewProceed
     */
    public function __construct(Request $request,Review $reviewProceed,View $viewProceed)
    {
        $this->request = $request;
        $this->reviewProceed = $reviewProceed;
        $this->viewProceed = $viewProceed;
    }

    public function home()
    {
        $threeReviews = $this->viewProceed->threeProducts();

    	return view('frontend.pages.home')->with(['productReviews'=>$threeReviews,'products'=>$this->viewProceed->limitProduct(4)]);
    }

    
}
