<?php

namespace App\Http\Controllers;
use App\Http\Requests;

use Illuminate\Http\Request;
use App\Mfounder;
use App\photogallery;
use App\Mdonar;
use App\thana;
use DB;

class founderMember extends Controller
{
     
   public function store(Request $request)
    {
        $request->validate([
        'fullname'=>'required',
        'designation'=> 'required',
       
     ]);    

    $data = new Mfounder([
       
      $file = $request->input('image'),
      $photo = $request->file('image')->getClientOriginalName(),
      $destination = base_path() . '/public/upload',
      $request->file('image')->move($destination, $photo), 

      'faname' => $request->get('fullname'),
      'designation'=> $request->get('designation'),
      'fpicture'=> $photo,
    ]);

    $data->save();
    return redirect('/createfounder')->with('success', 'Founder has been added');
      //
    }
    

     public function fview() 
     {
       $fumember = Mfounder::paginate(20); //all()->toArray();
       
       return view ('layout.admin.viewFounder',compact('fumember'));   
     }


     public function photoview() 
     {
       $photos = photogallery::paginate(20); //all()->toArray();
       return view ('layout.admin.viewphoto',compact('photos'));  
     }
     


    public function photostore(Request $request)
    {
        $request->validate([
        'photocaption'=>'required',
        //'eventpic'=> 'required',
        //$path=$request->file['image']->store['upload'],
               ]);

     ]);
    
      $data = new photogallery([

        $file = $request->input('image'),
        $photo = $request->file('image')->getClientOriginalName(),
        $destination = base_path() . '/public/upload',
        $request->file('image')->move($destination, $photo),
        
        'photocaption' => $request->get('photocaption'),
        'eventpic'=> $photo,
       
    

      $data->save();
      return redirect('/createphoto')->with('success', 'Photo has been added');

      //
    }   

      
    public function fmemdel($id) {

       $ddd=DB::table('mfounder')->where('id',$id)->delete();
       return redirect('/viewFounder')->with('success','Post removed'); 
    }

    
    public function Fmeshow($id)
    {
       $data= Mfounder::findorfail($id);
       return view ('layout.admin.editfounder',compact('data'));  
    } 

    //public function update(Request $request, $id)
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $data = Mfounder::find($id);
        /*var_dump($data);
        die();*/
        $data->update($input);

        $request->session()->flash('message', 'Successfully update Data');
        return redirect('viewFounder'); 

    }





     /*public function selthana() 
     {
       $thana = thana::all()->toArray();
       return view ('layout.admin.createdonar',compact('thana')); 
     } */  

     



}
