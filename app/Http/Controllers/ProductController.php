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

    public function get_all_product(){
        $products = Product::latest()->get();
        return response()->json([
            'products' => $products
        ], 200);
    }

    public function edit_product($id){
        $product = Product::find($id);
        return response()->json([
            'product' => $product
        ], 200);
    }

    public function update_product(Request $request, $id){
        $product = Product::where('id', $id)->first();

        $product->update([
            'item_code' => $request->item_code,
            'description' => $request->description,
            'unit_price'  => $request->unit_price,
            'updated_at' =>  Carbon::now()
         ]);
         return response()->json([
            'msg' => 'Product updated successful'
        ], 200);
    }


    public function delete_product($id){
        $product = Product::findOrFail($id);
        $product->delete();
    }


}
