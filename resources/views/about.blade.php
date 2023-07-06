@extends("layouts.master")
@section("title", "About")
@section("content")
    <h1>About Page</h1>
@endsection

@section("sidebar")
    @parent
    <div class="card mb-4">
        <div class="card-header">About Side Widget</div>
        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
    </div>
@endsection
