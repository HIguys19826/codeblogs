@extends('layouts/layout_card')

@section('title')
Show | {{$posts->title}}
@endsection

@section('content')

<div class="card">
<img src="{{asset('asset/img/'.$posts->img)}}" class="card-img-top">
    <div class="card-body">
    <h2><a href="{{url('posts/show',$posts->id)}}">{{$posts->title}}</a></h2>
    <p>{{$posts->body}}</p>
    </div>
</div>

@endsection