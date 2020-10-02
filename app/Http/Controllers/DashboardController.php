<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        $receipts = \App\Models\Receipt::all();
        $stores = \App\Models\Store::all();
        $items = \App\Models\Item::all();
        $categories = \App\Models\Category::all();
        $groceries = \App\Models\Grocery::all();
        return view('dashboard',[
            'receipts'=>$receipts,
            'stores'=>$stores,
            'items'=>$items,
            'categories'=>$categories,
            'groceries'=>$groceries
        ]);
    }
}
