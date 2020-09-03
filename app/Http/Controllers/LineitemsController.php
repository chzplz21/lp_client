<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LineitemsController extends Controller
{
    public function GetAll() {
        $lineitems = \App\LineItems::all()->toArray();
        print_r($lineitems);
    }
    
    public function store(Request $request) {  
      print_r("yo");
      //$input = $request->all();
      //\App\LineItems::create($input);
      
    }

    public function Edit(Request $request, $id) {
      $input = $request->all();
      $update = \App\LineItems::find($id)->update($input);

    }

    public function add_lineitem_to_doc(Request $request) {
      $input = $request->all();
      $created_schedule = \App\DocLineitems::create($input);
      //$update = \App\LineItems::find($id)->update($input);

    }

    public function update_lineitem_in_doc(Request $request) {
      $input = $request->all();
      \App\DocLineitems::find($input['id'])->update($input);
      //$update = \App\LineItems::find($id)->update($input);

    }

    public function delete_lineitem_in_doc(Request $request) {
      $input = $request->all();
      \App\DocLineitems::where('id', '=', $input['id'])->delete();
      //$update = \App\LineItems::find($id)->update($input);

    }

}
