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
            'image' => 'logo.png',
            'whyChooseDLcleaners' => 'We have excellend reviews with an avaerage of 4.9 stars from customers which we are very proud of. You can view our reviews on yell which we have a link to at the bottom of the page or we will soon have reviews on our blog page which is coming soon. I believe this is due to our willingness to go above and beyond. We really do care about doing a great job whether its domestic or commercial we always give a 100 percent.',
            'history' => 'Hi my name is Dean Lark and I\'m the owner of DLcleaners. Currently it is just myself working for the company but I am looking to expand. I started DLcleaners in 2018 and its been a success from the get go. I started by doing just domestic cleaning but soon moved on to cleaning for the BRI hospital, having contracts with Yatton Fish Bar, Yatton Dental and Implant Center and a number of estate agents.',
            'historyP2' => 'Before I went travelling in 2006 I worked for a cleaning company that done alot of work for the council. It really was a job I found satisfaction in if you can believe that. Its a job where you can see the results of a hards day work which I find very rewarding, but I think the most rewarding thing about being a cleaner is seeing the look in peoples faces after they see the results of my work!!'
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
