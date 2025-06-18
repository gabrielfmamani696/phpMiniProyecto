<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function postMethod(): View {

        $posts = Post::all();
        // dd($posts);
        return view("posts", compact("posts"));
    }
}
