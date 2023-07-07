<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#!">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                @auth
                    <li class="nav-item"><a class="nav-link" href="/admin/articles">Articles</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/articles/create">Create</a></li>
                @endauth
            </ul>
            <ul>
                @if(auth()->check())
                    <a href="/admin/articles" class="btn btn-info">Admin</a>
                    <form action="{{route("logout")}}" method="post">
                        @csrf
                        <button class="btn btn-danger">logout</button>
                    </form>
                @else
                    <a href="{{route("login")}}" class="btn btn-info">login</a>
                @endif
            </ul>
        </div>
    </div>
</nav>
