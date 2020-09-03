<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Estimates extends Controller
{
    
    public function GetAll() {
      $estimates = \App\Estimates::all()->toArray();
      print_r($workorders);
    }
    
    public function Create(Request $request) {  
      $input = $request->all();
      $created = \App\Estimates::create($input);
      $id = $created->id;
      
    }

    public function Edit(Request $request, $id) {
      $input = $request->all();
      $update = \App\Estimates::find($id)->update($input);

    }


}
