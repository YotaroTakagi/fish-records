@extends("layouts.app")

@section("content")
    <div class="text-center">
        <h1>ログイン</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            
            {!! Form::model($users, ["route" => "login.post"]) !!}
             
                <div class="form-group">
                    {!! Form::label("nickname", "ニックネーム") !!}
                    {!! Form::text("nickname",null, ["class" => "form-control"]) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit("ログインする ", ["class" => "btn btn-primary btn-block"]) !!}
            {!! Form::close() !!}
            
            <p class="mt-2">ユーザー登録はこちらから {!! link_to_route("signup.get", "ユーザー登録", [], ["class" => "btn btn-lg btn-primary"]) !!}</p>
            
        </div>
    </div>
@endsection