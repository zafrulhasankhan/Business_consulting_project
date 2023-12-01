<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Fortify\Http\Responses\RegisterResponse;

class registerPageController extends Controller
{
    //
    public function index(Request $request,$role_id){
       
        return view('auth.login',['role'=>$role_id]);
        
}


}
