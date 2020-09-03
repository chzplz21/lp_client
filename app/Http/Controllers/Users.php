<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller

{
    public function ShowUsersView() {
      return view('users', []);
    }

    public function GetAll() {
        $users = \App\User::all()->toArray();
        return $users;
    }
    
    public function Create(Request $request) {  
      $input = $request->all();
      $created = \App\Workorders::create($input);
      $id = $created->id;  
    }

    public function Edit(Request $request, $id) {
      $input = $request->all();
      $update = \App\Workorders::find($id)->update($input);

    }
}
