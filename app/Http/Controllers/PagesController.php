<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Welcome to DLcleaners',
            'sub' => 'There is no job too big or too small for DLcleaners'
        );

        return view('pages.index')->with($data);
    }

    public function about(){
        $data = array(
            'title' => 'About Us',
            'sub' => 'We are currently constructing this page. However, if you need to contact us this is our number 07398092318',
            'image' => 'logo.png'
        );

        return view('pages.about')->with($data);
    }

    public function services(){
        $data = array(
            'title' => 'Services we provide',
            'sub' => 'We are currently constructing this page. However, if you need to contact us this is our number 07398092318'
        );

        return view('pages.services')->with($data);
    }

    public function contact(){
        $data = array(
            'title' => 'Contact Us',
            'sub' => 'We are currently constructing this page. However, if you need to contact us this is oue number 07398092318'
        );

        return view('pages.contact')->with($data);
    }

    public function gallery(){
        $data = array(
            'title' => 'DLcleaners gallery',
            'sub' => 'We are currently constructing this page. However, if you need to contact us this is our number 07398092318'
        );

        return view('pages.gallery')->with($data);
    }

}
