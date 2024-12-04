<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('website.pages.index');
    }

    public function about(){
        return view('website.pages.about');
    }

    public function job_detail(){
        return view('website.pages.job_detail');
    }

    public function job_list(){
        return view('website.pages.job_list');
    }
    public function job_category(){
        return view('website.pages.job_category');
    }
    public function testimonial(){
        return view('website.pages.testimonial');
    }
    public function error_page(){
        return view('website.pages.error_page');
    }
    public function contact(){
        return view('website.pages.contact');
    }
}
