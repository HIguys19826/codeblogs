@extends('layouts/layout')

@section('content')

@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger">{{$error}}</div>
@endforeach
@endif
<form method="post" action="{{url('posts/store')}}">
@csrf
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label text-white">post name</label>
  <input type="text" name="title" value="{{old('title')}}" class="form-control" id="exampleFormControlInput1" placeholder="title">

</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label text-white"> post body</label>
  <input type="text" name="body" value="{{old('body')}}" class="form-control" id="exampleFormControlInput1" placeholder="body">

</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label text-white"> post img</label>
  <input type="text" name="img" value="{{old('img')}}" class="form-control" id="exampleFormControlInput1" placeholder="img">

</div>
<button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection

