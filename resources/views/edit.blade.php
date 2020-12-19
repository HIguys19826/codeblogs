@extends('layouts/layout')

@section('title')
Edit | {{$post->name}}
@endsection
@section('content')
<form method="post" action="{{url('posts/update',$post->id)}}">
@csrf
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">post title</label>
  <input type="text" value="{{$post->title}}" name="title" class="form-control" id="exampleFormControlInput1" placeholder="title">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"> body</label>
  <input type="text" value="{{$post->body}}" name="body" class="form-control" id="exampleFormControlInput1" placeholder="body">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"> img</label>
  <input type="text" value="{{$post->img}}" name="img" class="form-control" id="exampleFormControlInput1" placeholder="img">
</div>
<button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection