@extends("layouts.app")

@section("content")
    <div class="text-center">
        <h1>プロフィール編集</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            
            {!! Form::model($users, ["route" => "edit.post", 'enctype'=>'multipart/form-data']) !!}
                <div class="form-group">
                    {!! Form::label("nickname", "ニックネーム") !!}
                    {!! Form::text("nickname", null, ["class" => "form-control"]) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label("avatar", "プロフィール写真") !!}
                    {!! Form::file("avatar",  ["class" => "form-control-file"]) !!}
                </div>
                
                {!! Form::submit("更新する", ["class" => "btn btn-primary btn-block"]) !!}
                
            {!! Form::close() !!}
            
            
        </div>
       
    </div>

@endsection