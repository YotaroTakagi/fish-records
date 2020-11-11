<header class="mb-4">
    <nav class="navbar nabvar-expand-sm navbar-dark bg-dark">
        <a class="nabvar-brand" href="/">Top Page</a>
        
        <button type="button" class="nabvar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    <li class="nav-item"><a href="#" class="nav-link">Users</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item">{!! link_to_route("edit", "プロフィール編集") !!}</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">{!! link_to_route("logout.get", "ログアウト") !!}</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">{!! link_to_route("fileIndex", "記録一覧") !!}</li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">{!! link_to_route("signup.get", "ユーザー登録", [], ["class" => "nav-link"]) !!}</li>
                    <li class="nav-item">{!! link_to_route("login", "ログイン", [], ["class" => "nav-link"]) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>



                
                /**<li class="list-unstyled">
                    {!! Form::open(["action" => "UsersController@delete",]) !!}
                        {!! Form::submit("ユーザー情報を削除する",  ["class" => "btn btn-danger"]) !!}
                    {!! Form::close() !!}
                </li>**/