<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function all_customer(){
        $customers = Customer::orderBy('id', 'DESC')->get();

        return response()->json([
            'customers' => $customers
        ], 200);
    }

    public function add_customer(Request $request){
        // dd($request->toArray());

        Customer::insert([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email ,
            'address' => $request->address,
            'created_at' => Carbon::now(),

        ]);
    }
}

