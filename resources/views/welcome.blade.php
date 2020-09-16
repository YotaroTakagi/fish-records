@extends("layouts.app")

@section("content")
    <div class="center jumpbotron">
        <div class="text-center">
            <h1>Fish Record !</h1>
            {!! link_to_route("signup.get", "Sign UP", [], ["class" => "btn btn-lg btn-primary]) !!}
        </div>
    </div>



@endsection