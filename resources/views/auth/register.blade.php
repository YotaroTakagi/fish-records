@extends("layouts.app")

@section("content")
    <div class="text-center">
        <h1>Sign Up</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            
            {!! Form::open(["route" => "signup.post"]) !!}
                <div class="form-group">
                    {!! Form::label("name", "Name") !!}
                    {!! Form::text("name", old("name"), ["class" => "form-control"]) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label("email", "Email") !!}
                    {!! Form::text("email", old("email"), ["class" => "form-control"]) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label("pasword", "Password") !!}
                    {!! Form::text("password", ["class" => "form-control"]) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label("password_confirmation", "Confirmation") !!}
                    {!! Form::text("password_confirmation", ["class" => "form-control"]) !!}
                </div>
                
                {!! Form::submit("Sign Up", ["class" =>　"btn btn-primary btn-block"]) !!}
            {!! Form::close() !!}
            
        </div>
    </div>
@endsection