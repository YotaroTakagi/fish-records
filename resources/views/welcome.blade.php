@extends("layouts.app")

@section("content")

    @if (Auth::check())
 
        <div>
            @include("users.index")
        </div>
            
    @else
        <div class="center jumpbotron">
            <div class="text-center">
                <h1>お魚日記 </h1>
                {!! link_to_route("signup.get", "ユーザー登録", [], ["class" => "btn btn-lg btn-primary"]) !!}
                {!! link_to_route("login", "ログイン", [], ["class" => "btn btn-lg btn-primary"]) !!}
                
                {!! Form::open(["action" => "UsersController@delete",]) !!}
                    {!! Form::submit("ユーザー情報を削除する",  ["class" => "btn btn-danger"]) !!}
                {!! Form::close() !!}
            </div>
        </div>
    @endif

@endsection