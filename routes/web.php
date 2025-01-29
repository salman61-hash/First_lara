<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salman/{name?}', function ($name="") {
    echo "my name is {$name}";
});



Route::get('/salman/{name?}', function ($name) {
    return view("user",compact('name'));
 });


Route::get('/munsi', function () {
    return view('user');      
});




Route::get('/usertable',function (){
    $users=[
        ["id"=>1,"name"=>"hasan","address"=>"Dhaka"],
        ["id"=>2,"name"=>"kamal","address"=>"Dhaka"],
        ["id"=>3,"name"=>"jamal","address"=>"Dhaka"],
        ["id"=>4,"name"=>"ismail","address"=>"Dhaka"],
        ["id"=>5,"name"=>"jisan","address"=>"Bosila"],
    ];
    return view("userlist",compact('users'));

});




Route::get('/role',[Rolecontroller::class,'index']);
Route::get('/role/create',[rolecontroller::class,'create']);
Route::get('/role/update',[rolecontroller::class,'update']);

