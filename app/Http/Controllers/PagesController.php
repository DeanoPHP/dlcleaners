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
            'image' => 'logo.png',
            'whoWeAre' => '',
            'whatMatters' => '',
            'history' => 'Hi my name is Dean Lark and I\'m the owner of DLcleaners. Currently it is just myself working for the company but I am looking to expand. I started DLcleaners in 2018 and its been a success from the get go. I started by doing just domestic cleaning but soon moved on to cleaning for the BRI hospital, having contracts with Yatton Fish Bar, Yatton Dental and Implant Center. I have also been working for number of estate agents.',
            'historyP2' => 'Before I went travelling in 2006 I worked for a cleaning company that done alot of work for the council. It really was a job I found satisfaction in if you can believe that. Its a job where you can see the results of hards day work which is very rewarding, but I think the most rewarding thing about being a cleaner is seeing the look in peoples faces after i have completely changed there household, office, shop etc etc.'
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
