<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    public function index(){
      $post = Post::latest()->get();
      dd($post->toArray());
      return view('posts.index');
    }
}
