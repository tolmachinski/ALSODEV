@extends('layouts.app')

@section('content')


<div class="container mt-2" style="max-width: 800px; ">
    <h2> Feedback : </h2>



    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif



    <form method="post" action="feedback/check">


        @csrf

        <label for="exampleFormControlInput1" class="form-label mt-3">E-mail:</label>
        <input name="email" type="email" class="form-control " id="exampleFormControlInput1" placeholder="name@example.com">


        <label for="exampleFormControlInput1" class="form-label mt-3">Name</label>
        <input name="user" type="name" class="form-control " id="exampleFormControlInput1" placeholder="Name">


        <label for="exampleFormControlTextarea1" class="form-label mt-3">Message:</label>
        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="..."></textarea>


        <button type="submit" class="btn btn-outline-primary mt-3">Send</button>


    </form>
</div>

<div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</div>
</div>
</div>
</div>
</body>

</html>
@endsection