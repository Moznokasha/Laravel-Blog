@extends("layouts.app")
@section('title',"Add post")
@section('content')



<form action="/posts/{{$post['id']}}" method="POST">
@method("put")
@csrf
    <input type ="text" name="title" value="{{$post['title']}}"><br>
    <input type ="text" name="body" value="{{$post['body']}}"><br>
    <input type ="submit" value ="Update">
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection