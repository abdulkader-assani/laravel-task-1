@extends('layouts.app')

@section('title', 'Posts')

@section('content')

    <div class="container my-3">
        <div class="row ">
            <div class="col-2"></div>
            <div class="col-8">
                @session('status')
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endsession
                <h2 style="display: inline">Posts list:</h2>
                <a href="{{ route('posts.create') }}" class="btn btn-success float-end">Add new post</a>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <div class="container ">
        <div class="row align-items-center">
            @forelse ($posts as $post)
                <div class="col-3 card my-3 mx-5">
                    <div class="card-header">
                        <h5 class="card-title">{{ $post->title }}</h5>
                    </div>
                    <div class="card-body ">
                        <p class="card-text">description:...<a
                                class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                href="{{ route('posts.show', $post->id) }}">
                                Read more
                            </a></p>
                        <img src="/images/posts/{{ $post->image }}" class="card-img" alt="">
                        <a href="{{ route('posts.show', $post->id) }}">
                            <button type="button" class="btn btn-primary my-2">Show post</button>
                        </a>
                    </div>
                </div>
            @empty
                <div class="container text-center">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="card col-8">
                            <div class="card-header">
                                <h3>there is no data</h3>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
