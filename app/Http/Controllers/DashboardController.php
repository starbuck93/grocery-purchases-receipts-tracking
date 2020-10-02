<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function show()
    {
        $receipts = \App\Models\Receipt::all();
        $stores = \App\Models\Store::all();
        $items = \App\Models\Item::all();
        $categories = \App\Models\Category::all();
        $groceries = \App\Models\Grocery::all();
        $sum = 0;
        foreach ($groceries as $grocery) { 
            $sum += $grocery->price * $grocery->qty;
        }        
        foreach ($receipts as $receipt ) {
            $sum = $sum - $receipt->discount_usd;
        }
        $total_spent = $sum;
        $tmp = \App\Models\Grocery::select('item_id',DB::raw('count(item_id) quantity'))->groupBy('item_id')->get()->first();
        $favorite_item = \App\Models\Item::where("id",$tmp->item_id)->get()->first();

        return view('dashboard',[
            'receipts'=>$receipts,
            'stores'=>$stores,
            'items'=>$items,
            'categories'=>$categories,
            'groceries'=>$groceries,
            'total_spent'=>$total_spent,
            'favorite_item'=>$favorite_item
        ]);
    }
}
