{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Newspaper Dashboard') }}
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

@extends('admin.layouts.master')

@section('content')
<!-- Sidebar -->
<div class="sidebar">
    <h2>Dashboard</h2>
    <a href="#all-posts" onclick="showSection('all-posts')">All Posts</a>
    <a href="#add-new-post" onclick="showSection('add-new-post')">Add New Post</a>
    <a href="#categories" onclick="showSection('categories')">Categories</a>
</div>

<!-- Content Area -->
<div class="content">
    <!-- All Posts Section -->
    <div id="all-posts" class="section">
        <h2>All Posts</h2>
        <div class="post-item">
            <h3>Post Title 1</h3>
            <p>Content of post 1...</p>
            <div class="post-actions">
                <button class="edit-btn">Edit</button>
                <button class="delete-btn">Delete</button>
            </div>
        </div>
        <div class="post-item">
            <h3>Post Title 2</h3>
            <p>Content of post 2...</p>
            <div class="post-actions">
                <button class="edit-btn">Edit</button>
                <button class="delete-btn">Delete</button>
            </div>
        </div>
    </div>


    <!-- Add New Post Section -->
    <div id="add-new-post" class="section" style="display: none;">
        <h2>Add New Post</h2>
        <form>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content"></textarea>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select id="category" name="category">
                    <option value="news">News</option>
                    <option value="sports">Sports</option>
                    <option value="entertainment">Entertainment</option>
                </select>
            </div>
            <button type="submit">Add Post</button>
        </form>
    </div>

    <!-- Categories Section -->
    <div id="categories" class="section" style="display: none;">
        <h2>Categories</h2>
        <ul class="category-list">
            <li>News</li>
            <li>Sports</li>
            <li>Entertainment</li>
        </ul>
    </div>

</div>

@endsection
