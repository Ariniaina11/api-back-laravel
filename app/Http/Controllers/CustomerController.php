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

    // 
}
