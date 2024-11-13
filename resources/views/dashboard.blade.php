{{--  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

--}}

@extends('admin/layouts/master')

@section('content')

<div class="sidebar">
    <h2>Dashboard</h2>
    <a href="{{ route('posts.index') }}">All Posts</a>
    <a href="{{ route('posts.create') }}">Add New Post</a>
    <a href="{{ route('categories.index') }}">Categories</a>
</div>

<h2>All Posts</h2>
    <p>Here you can see all posts.</p>
    <!-- Posts listing here -->
    @foreach ($posts as $post)
        <div>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
            <p>Category: {{ $post->category->name }}</p>
        </div>
    @endforeach

@endsection

