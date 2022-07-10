<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\Home;

class GalleryController extends Controller
{
    public function index(){
        // $homes = Home :: all();
        return view('frontend.gallery');


    }
}
