<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CollectionServices;
class CollectionController extends Controller
{
    protected $collectionService;
    public function __construct(CollectionServices $collectionService)
    {
        $this->collectionService = $collectionService;
    }
    public function collection_history(){
        return view('admin.collection.collection_history');
    }
    public function collectionHistory(Request $request){
        $loan_id = $request->loan_id;
        $collections = $this->collectionService->getLoanCollection($loan_id);
        return view('admin.collection.collection_history_report',compact('collections'))->render();
    }
}
