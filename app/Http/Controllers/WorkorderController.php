<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkorderController extends Controller

{
    public function index() {
      return view('workorders', []);
    }

    public function get_all() {
        $workorders = \App\Workorders::all()->toArray();
        print_r($workorders);
    }
    
    public function store(Request $request) {  
      $input = $request->all();
      $created = \App\Workorders::create($input);
      $id = $created->id;
      
    }

    public function update(Request $request, $id) {
      $input = $request->all();
      $update = \App\Workorders::find($id)->update($input);

    }

    public function destroy(Request $request, $id)
    {   
       $workorder = \App\Workorders::find($id);
       $workorder->status = "deleted";
       $workorder->save();
        
    }

    public function get_single_workorder($id) {
      $single_workorder = \App\Workorders::where('id', $id)->first()->toArray();
      return $single_workorder;
    }

    public function show($id) {

      $single_workorder = $this->get_single_workorder($id);
      return view('single_workorder', []); 
    }

    public function info_tab($id) {
      $single_tab_info = DB::table('workorders')
      ->join('customers', 'workorders.customerid', '=', 'customers.id')
      ->select('workorders.*', 'customers.*')
      ->get();

      return $single_tab_info;
      
    }

    public function customer_info($id) {
      $single_workorder = $this->get_single_workorder($id);
      $single_customer = \App\Customers::where('id', $single_workorder['customerid'])->first()->toArray();
      return $single_customer;
      
    }

    public function get_lineitems($id) {
      
      $doc_lineitems = DB::table('doc_lineitems')
      ->join('lineitems', 'doc_lineitems.lineitem_id', '=', 'lineitems.id')
      ->where('doc_lineitems.doc_type', '=', 'workorders')
      ->where('doc_lineitems.doc_id', '=', $id)
      ->select('doc_lineitems.*', 'lineitems.name')
      ->get()
      ->toArray();     
      

      return $doc_lineitems;

    }

}
