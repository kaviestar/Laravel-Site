@extends('layouts.app')

@section('content')
	<a href="/laravelsite/public/posts" class="btn btn-default">Go back</a>
	<h1>{{$post->title}}</h1>
	
	<div>
		{{$post->body}}
	</div>
	<hr>
	<small>Wriiten on {{$post->created_at}}</small>

@endsection