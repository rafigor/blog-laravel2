<?php

namespace App\Http\Controllers;

use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use App\Post;

use App\Http\Requests;

class PostController extends Controller
{
    public function index(){
        $posts = \App\Post::all();
        return view ('Post.index', compact('posts'));
    }
}
