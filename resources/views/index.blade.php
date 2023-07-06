@extends("layouts.master")
@section("title", "Home")
@section("content")
    <h1>Home Page</h1>
    <!-- Featured blog post-->

    @foreach($articles as $article)
        <div class="card mb-4">
            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg"
                              alt="..."/></a>
            <div class="card-body">
                <div class="small text-muted">January 1, 2023</div>
                <h2 class="card-title">{{$article->title}}</h2>
                <p class="card-text">{{$article->body}}</p>
                <a class="btn btn-primary" href="/article/{{$article->slug}}">Read more →</a>
            </div>
        </div>
    @endforeach

    <!-- Pagination-->
    <nav aria-label="Pagination">
        <hr class="my-0"/>
        <ul class="pagination justify-content-center my-4">
            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a>
            </li>
            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
            <li class="page-item"><a class="page-link" href="#!">2</a></li>
            <li class="page-item"><a class="page-link" href="#!">3</a></li>
            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
            <li class="page-item"><a class="page-link" href="#!">15</a></li>
            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
        </ul>
    </nav>
@endsection

@section("sidebar")
    {{--access to all of the codes in sidebar--}}
    @parent
    <h2>This is Side Bar</h2>
    <div class="card mb-4">
        <div class="card-header">Side Bar Widget</div>
        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and
            feature the Bootstrap 5 card component!
        </div>
    </div>
@endsection


