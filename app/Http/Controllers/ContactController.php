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
        
        echo "<script>alert('Your message has been sent successfully')</script>";
        return redirect('/');
    }
}
