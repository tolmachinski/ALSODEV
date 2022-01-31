@extends('layouts.app')



@section('content')
<div class="container">
<a href="/home" class="card-link">Go Back</a>
<form class="mt-4" method="POST" action="{{ route('news.id', ['id' => $new->id.'/new']) }}">
    @csrf
    <div class="form-group">
    <label for="exampleFormControlInput1">Email:</label>

    <input value="{{ $new->email }}" name="email" type="text" class="form-control" placeholder="">
  </div>
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

  <div class="form-group">
    <label for="exampleFormControlInput1">User:</label>

    <input value="{{ $new->user }}" name="user" type="text" class="form-control" placeholder="">
  </div>
    @error('user')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Text</label>
    <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Update Text">{{ $new->message }}</textarea>
  </div>
    @error('message')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

  

  <div class="row mt-4">
    <div class="col">
        <button type="submit" class="btn btn-success">Save Changes</button>
    </div>
    
  </div>

</form>
</div>


@endsection('content')
