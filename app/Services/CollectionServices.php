<?php
namespace App\Services;
use App\Models\Collection;

class CollectionServices{
    public function getLoanCollection(string $loan_id){
        return Collection::where('loan_id',$loan_id)->get();
    }
}