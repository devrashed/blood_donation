<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mfounder;
use App\User;
use DB;


class Cmember extends Controller
{
   public function index() 
     {

      //$fumember=mfounder::paginate(10);
     $fumember = Mfounder::all()->toArray();     
     return view ('layout.admin.viewFounder',compact('fumember')); 
             
      }


   protected function Userstore(Request $request)
    {

    $data = new User([
        'name' => $request->get('name'),
        'email'=> $request->get('email'),
        'utype'=> $request->get('usertype'),
        'password'=> bcrypt($request->get('password')),
    ]);
         
  /*dd($data);
  die();*/

      $data->save();
      return redirect('/createuser')->with('success', 'New User Create Successfully');
    }


      
}




