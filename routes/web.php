<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UserController;     // Http Client
//use App\Http\Controllers\loginControllers;   //data validation
//use App\Http\Controllers\nameController;
//use App\Http\Controllers\itemController;

//use App\Http\Controllers\UserAuth;
//use App\Http\Controllers\AddMember;
//use App\Http\Controllers\uploadController;
//use App\Http\Controllers\MemberController;
//use App\Http\Controllers\Members;
//use App\Http\Controllers\EmployeeController;
   //use App\Http\Controllers\OneToOneController;
  //use App\Http\Controllers\OneToManyController;
  //use App\Http\Controllers\DeviceController;
  //use App\Http\Controllers\ProductController;
   


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

Route::get('/', function () {
    return view("welcome");
});

//Route::get('/user/{name}',function($name){
  //   return view('users',['name'=>$name]);

//});

//Route::get('user/{name}',[UserController::class,'loadview']);

//for component view
//Route::view("users","users");
//Route::view("about","about");


//for blade template
//Route::get("users",[UserController::class,'loadview']);

// HTML From for login

//Route::post("login",[loginControllers::class,'getData']);
//Route::view("login","login");

//Global Middleware
//Route::view("home","home");
//Route::view("usergroup","groupUser");
//Route::view("noaccess","noaccess");

// in group middleware projected page must be Route in Route Group 
/*
Route::group(['middleware'=>['protectedPage']],function(){
        Route::view("usergroup","groupuser");
});  */

// ***** for route middle ware 
//Route::view('userroute','routeuser')->middleware('protectedPage');


//Database Fetch 
//Route::get('/name',[nameController::class,'index']);

// From models database Config
//Route::get('name',[nameController::class, 'index']);


//HTTP client Connect to API data
//Route::get('user',[UserController::class,'index']);


//HTTP client method 
//Route::Delete("item",[itemController::class,'testRequest']); 
//Route::view("login",'users');

// Session/login

//Route::post('loginuser',[UserAuth::class,'userlogin']);

//Route::view("userauth","userAuth");
//Route::view("profile","profile");

//Route::get('/loginuser', function () {
  //if (session()->has('user'))
  //{
   //  return redirect('profile');
  //}
//return view ('userauth');
  
//});

//Route::get('/logout', function () {
  //if (session()->has('user'))
  //{
  //   session()->pull('user');
  //}
//return redirect ('userauth');
  
//});

// Flash session
//Route::view("add","add");

//Route::post("addmember",[AddMember::class,'add']);


//File Upload

//Route::view("upload","upload");
//Route::post('upload',[uploadController::class,'index']);


//show list from database table
//Route::get('list',[MemberController::class,'show']);


//save data in database

//Route::view("add","addmember");
//Route::post('add',[MemberController::class,'addData']);

//Delete data
//Route::get('list', [MemberController::class,'list']);
//Route::get('delete/{id}', [MemberController::class,'delete']);
//Route::get('edit/{id}', [MemberController::class,'showData']);  //for update data
//Route::post('edit', [MemberController::class,'update']);    //for update data

//Query Builder 
//Route::get('listquery',[Members::class,'dbOperation']);

//Joint 
//Route::get('employee',[EmployeeController::class,'show']);

//One to One 
//Route::get("data",[OneToOneController::class,'index']);

//one to many
//Route::get("data",[OneToManyController::class,'index']);

// Route Model Binding 
//Route::get("device/{key:name}",[DeviceController::class,'index']); 

//Multiple DB connection
//Route::get("list",[ProductController::class,'list']);

