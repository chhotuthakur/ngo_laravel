<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frontend\About;

class AboutController extends Controller
{
    public function index(){
        $abouts = About :: all();
        return view('frontend.about',['abouts'=>$abouts]);


    }
}
