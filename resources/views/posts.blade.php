
@extends('layouts/layout_card')

@section('title')
posts
@endsection



@section('content')



<!-- @foreach($posts as $post) -->

<div class="card">
<img src="{{$post->img}}" class="card-img-top">
    <div class="card-body">
    <h2><a href="{{url('posts/show',$post->id)}}">{{$post->title}}</a></h2>
    <p>{{$post->body}}</p>
    <a href="{{url('/posts/delete',$post->id)}}">    <button class="btn btn-primary">Delete</button></a>
    <a href="{{url('/posts/edit',$post->id)}}">    <button class="btn btn-primary">edit</button></a>
    </div>
</div>



<hr />
<!-- @endforeach -->

@endsection