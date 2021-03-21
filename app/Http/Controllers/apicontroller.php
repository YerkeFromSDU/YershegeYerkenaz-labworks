<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class apicontroller extends Controller
{
    public function index(Request $request){
        $posts = Post::all();
        return response($posts, 200);
    }
}
