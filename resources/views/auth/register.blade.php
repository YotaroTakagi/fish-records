@extends("layouts.app")

@section("content")
    <div class="text-center">
        <h1>ユーザー登録</h1>
    </div>
    
     <div class="row">
        <div class="col-sm-6 offset-sm-3">
            
            {!! Form::open(["route" => "signup.post"]) !!}
            
                <div class="form-group">
                    {!! Form::label("nickname", "ニックネーム") !!}
                    {!! Form::text("nickname", old("nickname"), ["class" => "form-control"]) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', old("password"), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password_confirmation', 'パスワード確認') !!}
                    {!! Form::password('password_confirmation', old("password"), ['class' => 'form-control']) !!}
                </div>
                
                
                {!! Form::submit("登録する", ["class" => "btn btn-primary btn-block"]) !!}
            {!! Form::close() !!}
            
           
            
           
            
            <p class="mt-2">ログインはこちらから {!! link_to_route("login", "ログイン", [], ["class" => "btn btn-lg btn-primary"]) !!}</p>
            
            
        </div>
       
    </div>
            
    
       
    
@endsection