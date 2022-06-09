<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function update(Request $request, Post $post){
        if(! Gate::allows('update-post', $post)){
            abort(403);
        }
    }
}
