<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends Controller
{
    function index()
    {
        
        $data = Post::all();
        return view('index',['posts'=>$data]); 
    }
}
