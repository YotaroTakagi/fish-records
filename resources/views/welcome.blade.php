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
                <p>初めての使用はこちらからユーザー登録</p>
                <p>↓↓</p>
                <li class="list-unstyled"> {!! link_to_route("signup.get", "ユーザー登録", [], ["class" => "btn btn-lg btn-primary"]) !!} </li>
                
                <p></p>
                <p></p>
                
                <p>ユーザー登録済みの方はこちらからログイン</p>
                <p>↓↓</p>
                <li class="list-unstyled"> {!! link_to_route("login", "ログイン", [], ["class" => "btn btn-lg btn-primary"]) !!} </li>
                
                <li class="list-unstyled">
                    {!! Form::open(["action" => "UsersController@delete",]) !!}
                        {!! Form::submit("ユーザー情報を削除する",  ["class" => "btn btn-danger"]) !!}
                    {!! Form::close() !!}
                </li>
            </div>
        </div>
    @endif

@endsection