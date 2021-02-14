<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class ApiController extends Controller
{
    public function getVideoUrl(){
        $vid = Video::all();
        $urls = [];
        foreach ($vid as $v ){
            $urls[] = $v -> link;
        }
        return response() -> json([
            'urls' => $urls
        ]);
    }
}
