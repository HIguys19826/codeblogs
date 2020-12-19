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


    function create(){
        return view('create');
    }


    function store(Request $request){
        //validate
         $validator = \Validator::make($request->all(), 
    [ 
     'title' => 'required|max:100|min:3', 
     'body' => 'required|max:100|min:3', 
     'img' => 'required|max:100|min:3', 
]); 
        if($validator->fails()) 
        { 
    return redirect('posts/create')->withErrors($validator)->withInput();
        }

        //new book
        $store=new Post();
        $store->title=$request->title;
        $store->body=$request->body;
        $store->img=$request->img;
        $store->save();
        return redirect('posts');
    }


    function delete($id)
    {
        $delete=Post::find($id);
        $delete->delete();
        return redirect('posts');
    }

    function edit($id){
        $edit=Post::find($id);
        
        return view('edit',[
            'post'=>$edit
        ]);
    }

    function update(Request $request , $id){
        $update=Post::find($id);
        $update->title=$request->title;
        $update->body=$request->body;
        $update->img=$request->img;
        $update->save();
        return redirect('posts');
    }
    
}