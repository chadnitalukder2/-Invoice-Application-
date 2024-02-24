<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function all_products() {
        $products = Product::orderBy('id', 'DESC')->get();
        return response()->json([
            'products' => $products
        ], 200);
    }

    public function add_product( Request $request){
        
        Product::insert([
            'item_code' => $request->item_code,
            'description' => $request->description,
            'unit_price' => $request->unit_price ,
            'created_at' => Carbon::now(),

        ]);
    }
}
