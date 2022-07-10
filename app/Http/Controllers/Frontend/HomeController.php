<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\Home;
use App\Models\Frontend\About;
use App\Models\Cause;

class HomeController extends Controller
{
    public function index(){
        $homes = Home :: all();
       
        $causes = Cause :: all();
       
        return view('frontend.index',['homes'=>$homes]);


    }
    public function showabout(){
        $abouts = About :: all();
return view('frontend.index',['abouts'=>$abouts]);
        
    }
}
