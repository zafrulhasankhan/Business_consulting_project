<?php

namespace App\Http\Controllers;

use App\Models\contactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //
    public function store(Request $request){
    //dd($request->contact_role);
        contactUs::create([
           'contact_name' => $request->contact_name,
           'contact_email' => $request->contact_email,
           'contact_phone' => $request->contact_phone,
           'contact_role' => $request->contact_role ?? null,
           'message' => $request->message,
        ]);
        return 'Successfully message Sent';

    }
}
