<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('contact.index');
    }

    public function contactSubmit(request $request){

        Mail::send('contact.contactmail', [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg
        ],function($mail) use($request){
            $mail->from(env('MAIL_FROM_ADDRESS'),$request->name);
            $mail->to('deanolark@gmail.com')->subject('Message From DLcleaners Website');
        });

        echo "<script>alert('Your message has been sent successfully and we get back to you within 24 hours')</script>";
        return redirect('/contact');
    }
}
