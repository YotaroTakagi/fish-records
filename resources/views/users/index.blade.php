@extends("layouts.app")

@section("content")

    <div>
       <h1> {{ Auth::user()->nickname }} </h1>
       
       <p class="plofile_picture">
           <img src="storage/avatar/IMG_0058.jpeg" width="150px" height="150px" alt="プロフィール写真が選択されていません">
       </p>
       
        <!--{!! Form::open(["route" => "fileUpload", 'enctype'=>'multipart/form-data']) !!}
                
            {!! Form::label("avatar", "プロフィール写真") !!}
            {!! Form::file("avatar", ["files" => true, "class" => "form-control-file"]) !!}
            {!! Form::submit("アップロード", ["class" => "btn btn-primary btn-block"]) !!}
                
        {!! Form::close() !!}-->
    </div>
    
    <div>
        
        {!! Form::open(["route" => "filePost", 'enctype'=>'multipart/form-data']) !!}
        
            <div class="form-group">
                {!! Form::label("content", "魚種") !!}
                {!! Form::text("content", null, ["class" => "form-control"]) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label("length", "魚長") !!}
                {!! Form::text("length", null, ["class" => "form-control"]) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label("timefix", "釣った時間") !!}
                {!! Form::text("timefix", null, ["class" => "form-control"]) !!}
            </div>
            
            <!--<div class="form-group">
                {!! Form::label("fish_picture", "写真") !!}
                {!! Form::file("fish_picture", ["files" => true, "class" => "form-control-file"]) !!}
            </div>-->
            
            <!--<div class="form-group">
                {!! Form::label("place", "釣った場所") !!}
                {!! Form::text("place", null, ["class" => "form-control"]) !!}
            </div>-->
            
            
            
            {!! Form::submit("投稿する", ["class" => "btn btn-primary btn-block"]) !!}
        
        {!! Form::close() !!}
        
        
       <!-- {!! Form::open(["route" => "fishPicture", 'enctype'=>'multipart/form-data']) !!}
            
            {!! Form::label("fish_picture", "写真登録") !!}
            {!! Form::file("fish_picture", ["files" => true, "class" => "form-control-file"]) !!}
            {!! Form::submit("アップロード", ["class" => "btn btn-primary btn-block"]) !!}
                
        {!! Form::close() !!}-->
                
        
        
    </div>
    
    

@endsection