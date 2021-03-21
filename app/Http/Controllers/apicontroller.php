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

    public function get_post(Request $request){
        $post = Post::find($request -> id);
        
        if($post == null){
            return response(['message' => 'There is no such client'], 404);
        }
        return response($post, 200);
    }
}
