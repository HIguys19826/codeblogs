@extends('layouts/layout_card')

@section('title')
tags
@endsection



@section('content')



@foreach($tags as $tag)


<div class="card">
    <div class="card-body">
    <h5 class="card-title">{{$tag->name}}</h5>
<!--    <img src="{{asset('asset/img/hd-wallpaper-4.jpg')}}" alt=""> -->
    </div>
</div>    

    @endforeach

    @endsection