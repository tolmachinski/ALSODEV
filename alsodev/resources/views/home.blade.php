@extends('layouts.app')

@section('content')


<div class="container mt-4" style="max-width: 800px;">
    <h3 class="container">Hello, {{ Auth::user()->name }}</h3>
    <h4 class="mt-4">Messages:</h4>

    @foreach($reviews as $el)
    <div class="alert alert-warning">
        <h4>{{ $el->user }}</h4>
        <a>{{ $el->email }}</a>
        <div class="container mt-3">
            <b>{{ $el->message }}</b>
        </div>
        <div class="container mt-3 ">
            <p>{{ $el->created_at }}</p>

        </div>
    </div>
    @endforeach
</div>
@endsection