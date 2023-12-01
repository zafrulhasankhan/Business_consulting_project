<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\demo;
use App\Http\Controllers\plan\entrepreneurController;
use App\Http\Controllers\plan\smallBusinessController;
use App\Http\Controllers\plan\startupController;
use App\Http\Controllers\plan\TeamController;
use App\Http\Controllers\ProfileCompleteController;
use App\Http\Controllers\registerPageController;
use App\Models\profileComplete;
use Illuminate\Support\Facades\Auth;
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

//template view routes
Route::get('/', function () {
    return view('template-view.index');
})->name('home');



Route::get('/get-started', function () {
    return view('template-view.getstart');
})->name('getStarted');

Route::get('/services', function () {
    return view('template-view.service');
})->name('services');


Route::get('/contact-us', function () {
    return view('template-view.contact-us');
})->name('contact-us');

Route::post('/contact-us',[ContactUsController::class,'store'])->name('contact-us'); 


Route::get('/about-us', function () {
    return view('template-view.About-us');
})->name('about-us');

Route::get('/chooseUs',function(){
    return view('template-view.ChooseUs');
})->name('chooseUs');

Route::get('/experience', function () {
    return view('template-view.experience');
})->name('experience');


//default routes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
     
    return view('dashboard');
})->name('dashboard');

//register page finder route
Route::get('/register/{role_id}',[registerPageController::class,'index'])->name('registerPage');

//login page finder
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

//middleware for access 
Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'role:plan1','prefix' => 'plan1', 'as' => 'plan1.'], function() {
        Route::resource('entrepreneur', entrepreneurController::class);
    });
   Route::group(['middleware' => 'role:plan2', 'prefix' => 'plan2', 'as' => 'plan2.'], function() {
       Route::resource('startup', startupController::class);
   });
    
    Route::group(['middleware' => 'role:plan3', 'prefix' => 'plan3', 'as' => 'plan3.'], function() {
        Route::resource('smallbusi', smallBusinessController::class);
    });

    Route::group(['middleware' => 'role:plan4', 'prefix' => 'plan4', 'as' => 'plan4.'], function() {
        Route::resource('investor', TeamController::class);
    });
    
    Route::get('/alluser', function () {
        return view('GuestProfile.index');
    })->name('alluser');
});

//profile completion

Route::post('/profile-completion',[ProfileCompleteController::class,'store'])->name('profile-complete');


//download the file 
Route::get('/download/{file}',[ProfileCompleteController::class,'download'])->name('download');


// see all user profile
Route::get('/profile/{id}',function ($id) {
    //return view('GuestProfile.profile',['id' =>$id]);
    return view('GuestProfile.profile1',['id' =>$id]);
})->name('user-profile');



