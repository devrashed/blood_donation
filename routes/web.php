<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use \App\thana;
Auth::routes();

/*==== Admin === */

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/admin','adminbashboard@index');

Route::get('/user','adminbashboard@registers');

Route::post('/usercreate', 'Cmember@Userstore');

Route::get('/viewFounder','founderMember@fview');

Route::get('/delete/{id}','founderMember@fmemdel');

Route::get('/editf/{id}','founderMember@Fmeshow');

Route::get('/home', function () {
  return view('layout.admin.home');
});


Route::get('/createfounder', function () {
  return view('layout.admin.createFounder');
});

Route::post('/insertMfounder', 'founderMember@store');

Route::post('update/{id}', 'founderMember@update');

Route::get('/createphoto', function () {
  return view('layout.admin.createPhoto');
});

Route::post('/insertphoto', 'founderMember@photostore');


Route::get('/viewphoto','founderMember@photoview');


Route::get('/createdoner','DonarController@viewdisThana');




Route::get('/ajax-subcat/{district_id}',function(){

$district_id=request()->route('district_id');    //return $district_id;
$thana= thana::where('did', '=', $district_id)->get();
return Response::json($thana); 
});


Route::get('/donarsearch','DonarController@donarsearch');

Route::get('/donarFind','DonarController@donarfind');

Route::get('/singledonar','DonarController@singledonar');


Route::get('/ajax-cat/{district_id}',function(){
  
    $district_id=request()->route('district_id');    //return $district_id;
    $thana= thana::where('did', '=', $district_id)->get();
    return Response::json($thana); 
});



Route::post('/newdonarinsert', 'DonarController@savedonar');

Route::post('/forntnewdonar', 'DonarController@forntstore');


Route::get('/viewdonar','DonarController@donarviw');  //return 


Route::get('/delete/{id}','DonarController@donarDel');

Route::get('/doEdit/{id}','DonarController@donarEdit');

Route::post('Doupdate/{mid}', 'DonarController@Doupdate');

Route::get('/donarequest', 'DonarController@donarrequest');


Route::get('/createdonar', function () {
  return view('layout.admin.createdonar');
});


Route::get('/createuser', function () {
  return view('layout.admin.createUser');
});

Route::get('/viewuser', function () {
  return view('layout.admin.viewUser');
});

Route::get('/changepassword', function () {
  return view('layout.admin.changePassword');
});

Route::get('/changePassword','BuildHomeController@showChangePasswordForm');

Route::post('/changePassword','BuildHomeController@changePassword')->name('changePassword');




/*===================     
      Fornt End
 =================*/

Route::get('/', function () { return view('welcome'); });


/*Route::get('/home', 'BuildHomeController@index')->name('home');

Route::get('/service', 'BuildHomeController@service')->name('service');

Route::get('/about', 'BuildHomeController@about')->name('about');
*/

Route::get('/service', function () { return view('service'); });

Route::get('/about', function () { return view('about'); });

Route::get('/founder', function () { return view('founder'); });

Route::get('/photogallery', function () { return view('photogallery'); });


Route::get('/donarjoin','DonarController@seldisthana');


Route::get('/contact', function () { return view('contact'); });