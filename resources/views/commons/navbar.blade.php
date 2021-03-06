<header class="mb-4">
    <nav class="navbar nabvar-expand-sm navbar-dark bg-dark">
        <a class="nabvar-brand" href="/">Top Page</a>
        
                @if (Auth::check())
                            <li class="list-unstyled">{!! link_to_route("fileIndex", "記録一覧") !!}</li>
                            <li class="list-unstyled">{!! link_to_route("edit", "プロフィール編集") !!}</li>
                            <li class="list-unstyled">{!! link_to_route("logout.get", "ログアウト") !!}</li>
                            
                            <li class="list-unstyled">竿登録</li>
                @else
                    <li class="list-unstyled">{!! link_to_route("signup.get", "ユーザー登録", [], ["class" => "nav-link"]) !!}</li>
                    <li class="list-unstyled">{!! link_to_route("login", "ログイン", [], ["class" => "nav-link"]) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>