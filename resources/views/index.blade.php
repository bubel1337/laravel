<?php
@extends('layout')

@section('content')
    <h1>All Posts</h1>

    <ul>
        @foreach ($posts as $post)
            <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>

    <a href="/posts/create">Create Post</a>
@endsection