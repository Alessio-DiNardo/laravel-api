<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::paginate(30);

        return response()->json(
            [
                'success' => true, 
                'results' => $posts,
            ]
        );
    }
}
