
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
                    {!! Form::label("avatar", "プロフィール写真") !!}
                    {!! Form::file("avatar", ["class" => "form-control-file"]) !!}
                </div>
            {!! Form::close() !!}
        </div>
       
    </div>
