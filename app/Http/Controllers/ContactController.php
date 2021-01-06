<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contact.index');
    }

    public function contactSubmit(request $request){

        Mail::send('emails.contactmail', [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg
        ],function($mail) use($request){
            $mail->from(env('MAIL_FROM_ADDRESS'),$request->name);
            $mail->to('deanolark@gmail.com')->subject('Contact Us Messge');            
        });
        
        //Need to sort out error msg 
        return redirect('/')->with('status','Your message has been sent successfully and we will respond within 24 hours');
    }
}
