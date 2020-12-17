
@extends('layouts/layout_card')

@section('title')
posts
@endsection



@section('content')



<!-- @foreach($posts as $post) -->

<div class="card">
<img src="{{asset('asset/img/egypt.jpg')}}" class="card-img-top">
    <div class="card-body">
    <h2><a href="{{url('posts/show',$post->id)}}">{{$post->title}}</a></h2>
    <p>{{$post->body}}</p>
    </div>
</div>



<hr />
<!-- @endforeach -->

@endsection