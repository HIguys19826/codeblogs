<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Cache\RateLimiting\Limit;
use App\Models\tags;

class postControllers extends Controller
{
    function posts(){
        $posts=Post::orderby("id","desc")->get();
        // return $books;
        return view('posts',
                ['posts'=>$posts]);
        

    }


    function show($id)
    {
        $show_post=Post::find($id);
        
        return view('show',[
            'posts'=>$show_post
        ]);
    }

    function search($keyword)
    {
        $posts=Post::where("title", "like", "%$keyword%")->get();
        // return $books;
        return view('search_result',
                ['posts'=>$posts]);
    }

    function latest($num){
        $posts=Post::orderby("id","desc" )->take($num)->get();
        // return $books;
        return view('latest',
                ['posts'=>$posts]);
        

    }

    function tags(){
        $tags=tags::get();
        // return $books;
        return view('tags',
                ['tags'=>$tags]);
        

    }
    
}