@extends("layouts.app")

@section("content")
    <div class="text-center">
        <h1>Log In</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            
            {!! Form::open(["route" => "login.post"]) !!}
             
                
                <div class="form-group">
                    {!! Form::label("email", "Email") !!}
                    {!! Form::email("email", old("email"), ["class" => "form-control"]) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label("pasword", "Password") !!}
                    {!! Form::password("password", ["class" => "form-control"]) !!}
                </div>
                
                
                
                {!! Form::submit("Log In ", ["class" => "btn btn-primary btn-block"]) !!}
            {!! Form::close() !!}
            
            <p class="mt-2">New User? {!! link_to_route("signup.get", "Sign Up", [], ["class" => "btn btn-lg btn-primary"]) !!}</p>
            
        </div>
    </div>
@endsection