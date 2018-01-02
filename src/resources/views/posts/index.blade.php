@extends('layouts.default')

@section('title', 'Blog Posts')

@section('content')
<h1>
  <a href="{{ url('/posts/create') }}" class="header-menu">New POST</a>
  Blog POST
</h1>
<ul>
  @forelse ($posts as $post)
    <li><a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a></li>
  @empty
    <li>No post yes</li>
  @endforelse
</ul>
@endsection
