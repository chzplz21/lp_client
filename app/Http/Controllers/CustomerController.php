<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;
use Redirect;

class CustomerController extends Controller
{

  public function index() {
    return view('customers', []);
  }

  public function get_all() {
    $customers = \App\Customers::all()->toArray();
    return $customers;

  }

  public function store(Request $request) {  
    $input = $request->all();
    $created_customer = \App\Customers::create($input);
    $id = $created_customer->id;
    return redirect()->route('single_customer', ['id' => $id]);
   
  }

  public function show($id) {
    $single_customer = \App\Customers::where('id', $id)->first();
    return view('single_customer', []);      
          
  }   

  public function update(Request $request, $id) {
   
    $input = $request->all();
    $updateCustomer = \App\Customers::find($id)->update($input);

  }




} 
