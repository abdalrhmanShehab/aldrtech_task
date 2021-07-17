<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Client;
use App\Models\News;
use App\Models\Portfilio;
use App\Models\Slider;
use App\Models\Work;

class frontController extends Controller
{
    public function index(){
        $about = About::all();
        $client = Client::all();
        $news = News::all();
        $portfilio = Portfilio::all();
        $slider = Slider::all();
        $work = Work::all();
        return view ('Front.index',compact(['about','client','news','portfilio','news','slider','work']));
    }
}
