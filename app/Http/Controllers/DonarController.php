<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mdonar;
use App\district;
use App\thana;
use DB;

class DonarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function donarin()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function savedonar(Request $request)
 

    {        
       $request->validate([
        'fullname'=>'required',
        'address'=> 'required',
        'gender'=> 'required',
        'blgroup'=> 'required',
        'phonenumber'=> 'required',
        'alternetphone'=> 'required',
        'district'=> 'required',
        'thana'=> 'required',
        'lastdate'=> 'required',
        'status'=> 'required',
    ]);

    /*var_dump($request);
     exit(); */

      $data = new Mdonar([
        'fullname' => $request->get('fullname'),
        'address'=> $request->get('address'),
        'gender'=> $request->get('gender'),
        'bgroup'=> $request->get('blgroup'),
        'phonenumber'=> $request->get('phonenumber'),
        'altePhone'=> $request->get('alternetphone'),
        'district'=> $request->get('district'),
        'thanaid'=> $request->get('thana'),
        'lastdate'=> $request->get('lastdate'),
        'status'=> $request->get('status'),
      ]);
         
    /* var_dump($data);
     exit();*/

      $data->save();
      return redirect('/createdoner')->with('success', 'New Donar Info has been added');
    }


public function forntstore(Request $request)
    {

       $request->validate([
        'fullname'=>'required',
        'address'=> 'required',
        'gender'=> 'required',
        'blgroup'=> 'required',
        'phonenumber'=> 'required',
        'alternetphone'=> 'required',
        'district'=> 'required',
        'thanas'=> 'required',
        'status'=> 'required',
    ]);
  /*  var_dump($request);
     exit();*/

     $data = new Mdonar([
    'fullname' => $request->get('fullname'),
    'address'=> $request->get('address'),
    'gender'=> $request->get('gender'),
    'bgroup'=> $request->get('blgroup'),
    'phonenumber'=> $request->get('phonenumber'),
    'altePhone'=> $request->get('alternetphone'),
    'district'=> $request->get('district'),
    'thanaid'=> $request->get('thanas'),
    'status'=> $request->get('status'),
      ]);
    /* dd($data); 
     die(); */ 

    $data->save();
    return redirect('/donarjoin')->with('success', 'New Donar Info has been added');
    }



   public function donarviw() 
     {
       //$donarfound = Mdonar::paginate(20); //all()->toArray();
       
       $donarfound = DB::table('mdonar')
                ->leftJoin('district', 'mdonar.district', '=', 'district.id') 
                ->leftJoin('thana', 'mdonar.thanaid', '=', 'thana.tid')
                ->paginate(100); 

            /*dd($donarfound);    
             die(); */

    return view('layout.admin.viewdonar',compact('donarfound')); 
     }
 

public function singledonar(Request $request){
     
     
    $phone=$request->get('phonenumber');
   
     $personal = DB::table('mdonar')
                ->leftJoin('district', 'mdonar.district', '=', 'district.id') 
                ->leftJoin('thana', 'mdonar.thanaid', '=', 'thana.tid')   
                ->where([
                    ['phonenumber', '=', $phone]
                 ])->get();
        
      //var_dump($donarinfo);          
      //print_r($donarinfo);  
      /* dd($personal);
      die();*/
     
       return view('layout.admin.singledonar',compact('personal')); 
       
  }



   
   public function donarEdit($id)
    {
       //$data= mdonar::findorfail($id);
       $dis=district::all();
       $thana=thana::all();
       $data= DB::table('mdonar')
                -> select('mdonar.*','district.districName','thana.thana')  
                ->leftJoin('district', 'mdonar.district', '=', 'district.id') 
                ->leftJoin('thana', 'mdonar.thanaid', '=', 'thana.tid')       
                ->where('mdonar.mid', '=', $id)
                ->first(); 
              
              /*var_dump($data); 
              die();*/
             /*dd($data);    
             die();  */    

        return view ('layout.admin.edit_donar',compact('data','dis','thana'));

          }  

  public function donarDel($id) {

       $ddd=DB::table('mdonar')->where('mid',$id)->delete();
       return redirect('/viewdonar')->with('success','Post removed'); 
    }

  
      public function Doupdate(Request $request, $id)
    {
        $input = $request->except('_token');
        $data = DB::table('mdonar')
               ->where('mdonar.mid', $id)->       
        update($input);
          
        /*dd($data);    
             die();*/

        $request->session()->flash('message', 'Successfully update Data');
        return redirect('viewdonar'); 
    }


    public function seldisthana() 
     {

     $fdis=district::all();
     $fthana=thana::all();
     //return view ('donarjoin')->withDis($fdis)->withThana($fthana);
     return view ('donarjoin',compact('fdis')); 
     }


    public function viewdisThana()
    {
        $dis=district::all();
        $thana=thana::all();
        return view('layout.admin.createdonar')->withDis($dis)->withThana($thana);
        //return view('layout.admin.edit_donar')->withDis($dis)->withThana($thana);
    }

    public function donarsearch()
    {
       $dis=district::all();
       return view('layout.admin.donarsearch')->withDis($dis);
    }
  

  public function donarfind(Request $request){
     
     
    $district=$request->get('district');
    $thana=$request->get('thana');
    $blgroup=$request->get('blgroup');
   
    /*$check= $blgroup.$thana.$district;

    dd($check);
    die();*/

    $donarinfo = DB::table('mdonar')
                ->leftJoin('district', 'mdonar.district', '=', 'district.id') 
                ->leftJoin('thana', 'mdonar.thanaid', '=', 'thana.tid')   
                ->where([
                    ['district', '=', $district],
                    ['thanaid', '=', $thana],
                    ['bgroup', '=', $blgroup]
                ])->get();
        
      //var_dump($donarinfo);          
      //print_r($donarinfo);  
     /*  dd($donarinfo);
      die();*/
     
      return view('layout.admin.donarfind')->with('donars',$donarinfo);
       //return view ('layout.admin.donarsearch')->with('donars',$donarinfo);
  }
        








    public function donarrequest () {          
         
       $donarrequest = DB::table('mdonar')
                    ->where('status', '=', 0)
                    ->get(); 
       
        /*dd ($donarrequest);   
        die();*/

       return view('layout.admin.donaRequest',compact('donarrequest'));

/*    $fumember = Mfounder::paginate(20);
    return view ('layout.admin.viewFounder',compact('fumember')); */  
      

    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
