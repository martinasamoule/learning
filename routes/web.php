<?php

use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
});*/
route::namespace('front')->group(function(){

    Route::get('/', 'homepagecontroller@index')->name('front.homepage'); 
    Route::get('/cat/{id}', 'coursecontroller@cat')->name('front.cat'); 
    Route::get('/cat/{id}/course/{c_id}', 'coursecontroller@show')->name('front.show'); 
    Route::get('/contact', 'contactcontroller@index')->name('front.contact');  
    Route::post('/message/newsletter', 'MessageController@newsletter')->name('front.message.newsletter');
    Route::post('/message/contact', 'MessageController@contact')->name('front.message.contact');
    Route::post('/message/enroll', 'MessageController@enroll')->name('front.message.enroll');
    
   
});
//----------------------------------------------------------------------------
route::namespace('admin')->prefix('/dashboard')->group(function(){

    Route::get('/login', 'authcontroller@login')->name('admin.login');
    Route::post('/dologin', 'authcontroller@dologin')->name('admin.dologin');
   

Route::middleware('adminauth:admin')->group(function(){ 

     Route::get('', 'homecontroller@index')->name('admin.home'); 
     Route::get('/logout', 'authcontroller@logout')->name('admin.logout'); 
    
      //cat
     Route::get('/cats', 'CatController@index')->name('admin.cat.index'); 
     Route::get('/cats/create', 'CatController@create')->name('admin.cat.create');
     Route::post('/cats/store', 'CatController@store')->name('admin.cat.store'); 
     Route::get('/cats/edit/{id}', 'CatController@edit')->name('admin.cat.edit'); 
     Route::get('/cats/update', 'CatController@update')->name('admin.cat.update');  
     Route::get('/cats/delete/{id}', 'CatController@delete')->name('admin.cat.delete'); 
     //________________________________________________________________________________________________________________
     //courses
     Route::get('/courses', 'courseController@index')->name('admin.course.index'); 
     Route::get('/courses/create', 'courseController@create')->name('admin.course.create');   
     Route::post('/courses/store', 'courseController@store')->name('admin.course.store');   
     Route::get('/courses/edit/{id}', 'courseController@edit')->name('admin.course.edit'); 
     Route::get('/courses/update', 'courseController@update')->name('admin.course.update');   
     Route::get('/courses/delete/{id}', 'courseController@delete')->name('admin.course.delete');
     Route::get('/courses/{id}', 'courseController@seemore')->name('admin.course.seemore');  
     //________________________________________________________________________________________________________________
     //trainers
     Route::get('/trainers', 'trainerController@index')->name('admin.trainer.index'); 
     Route::get('/trainers/create', 'trainerController@create')->name('admin.trainer.create');  
     Route::post('/trainers/store', 'trainerController@store')->name('admin.trainer.store'); 
     Route::get('/trainers/edit/{id}', 'trainerController@edit')->name('admin.trainer.edit');
     Route::get('/trainers/update', 'trainerController@update')->name('admin.trainer.update');   
     Route::get('/trainers/delete/{id}', 'trainerController@delete')->name('admin.trainer.delete');
//________________________________________________________________________________________________________________
//student
Route::get('/students', 'studentController@index')->name('admin.student.index'); 
Route::get('/students/create', 'studentController@create')->name('admin.student.create'); 
Route::post('/students/store', 'studentController@store')->name('admin.student.store'); 
Route::get('/students/edit/{id}', 'studentController@edit')->name('admin.student.edit'); 
Route::get('/students/update', 'studentController@update')->name('admin.student.update');   
Route::get('/students/delete/{id}', 'studentController@delete')->name('admin.student.delete');  
Route::get('/students/show-courses/{id}', 'studentController@showCourses')->name('admin.student.showCourses'); 
Route::get('/students/{id}/courses/{c_id}/approve', 'studentController@approveCourse')->name('admin.student.approveCourse'); 
Route::get('/students/{id}/courses/{c_id}/reject', 'studentController@rejectCourse')->name('admin.student.rejectCourse'); 
 });

    
});
