<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Get all customers
    public function customers(){
        $customers = Customer::all();

        return response()->json([
            'customers' => $customers,
            'message' => 'Customers',
            'code' => 200 // Success
        ]);
    }

    // Store customer data to DB
    public function store(Request $request){
        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->contact = $request->contact;

        // Save to DB
        $customer->save();

        // Response
        return response()->json([
            'message' => 'Customer stored successfuly',
            'code' => 200
        ]);
    }
}
