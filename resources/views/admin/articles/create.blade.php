@php use App\Models\Category; @endphp
@extends("layouts.master")
@section("title", "Create")
@section("content")
    <h2>Create Article :)</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/admin/articles" method="post">
        @csrf

        <div class="form-group">
            <label for="title">Title: </label>
            <input type="text" name="title" class="form-control">
            <br>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select name="categories[]" class="form-control" multiple>
                @foreach(Category::all() as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <br>

        <div class="form-group">
            <label for="body">Body: </label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
            <br>
        </div>
        <button class="btn btn-danger">Send</button>
    </form>
@endsection
