<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
class MainController extends Controller
{
    public function index(){
        $vid = Video::all();
        return view('pages.index' , compact('vid'));
    }
}
