<header class="mb-4">
    <nav class="navbar nabvar-expand-sm navbar-dark bg-dark">
        <a class="nabvar-brand" href="/">Menu</a>
        
        <button type="button" class="nabvar-toggler" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                <li class="nav-item">{!! link_to_route("signup.get", "SignUp", [], ["class" => "nav-link"]) !!}</li>
                <li class="nav-item"><a href="#" class="nav-link">LogIn</a></li>
            </ul>
        </div>
    </nav>
</header>