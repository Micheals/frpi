<?php

namespace App\Http\Controllers;

use App\Procedure\InItems\InItem;
use App\Procedure\Inventories\Inventory;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class InventoryController extends Controller
{
    /**
     * @var Request
     */
    private $request;
    /**
     * @var Inventory
     */
    private $inventoryProceed;
    /**
     * @var InItem
     */
    private $inItemRepository;

    /**
     * InventoryController constructor.
     * @param Request $request
     * @param InItem $inItemProceed
     * @param Inventory $inventoryProceed
     * @internal param Inventory $inventoryProceed
     */
    public function __construct(Request $request, InItem $inItemProceed, Inventory $inventoryProceed)
    {
        $this->request = $request;
        $this->inventoryProceed = $inventoryProceed;
        $this->inItemRepository = $inItemProceed;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.inventories.index')->with(['products' => $this->inventoryProceed->index()]);
    }

}