@extends("layouts.app")
@section('title',"List All Posts")
@section('content',)
<a href="/posts/create">Add post</a>

<table class="table">
@foreach($posts as $post)

  <tr>
      <td>{{$post->id}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post['body']}}</td>
      <td>{{ optional($post->user)->name }}</td>
      <td><a href="/posts/{{$post['id']}}" class="btn btn-primary">View</a></td>
      <td><a href="/posts/{{$post['id']}}/edit" class="btn btn-primary">Edit</a></td>
      <td>
        <form action="/posts/{{$post['id']}}" method="post">
        @method("delete")
        @csrf
        <input type="submit" value="Delete" class="btn btn-danger">
        </form>
      </td>
  </tr>
@endforeach
</table>
@endsection