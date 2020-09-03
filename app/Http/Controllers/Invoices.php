<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Invoices extends Controller
{
    
    public function GetAll() {
      $invoices = \App\Invoices::all()->toArray();
      print_r($invoices);
    }
    
    public function Create(Request $request) {  
      $input = $request->all();
      $created = \App\Invoices::create($input);
      $id = $created->id;
      
    }

    public function Edit(Request $request, $id) {
      $input = $request->all();
      $update = \App\Invoices::find($id)->update($input);

    }


}
