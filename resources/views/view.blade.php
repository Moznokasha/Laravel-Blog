@extends("layouts.app")
@section('title',"view post")
@section('content')
<ul class="list-group">
<li class="list-group-item"> {{$post->id}} </li>
<li class="list-group-item"> {{$post->title}} </li>
<li class="list-group-item"> {{$post['body']}} </li>
</ul>
@endsection