@extends('layouts.app')

@section('title', 'edit post')

@section('content')
    <div class="container my-3">
        <div class="row ">
            <div class="col-2"></div>
            <div class="col-8">
                <h4>Show post detail:
                    <a href="{{ route('posts.index') }}" class="btn btn-success float-end">go back</a>
                </h4>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-2"> </div>

                <div class="col-8 card my-2">
                    <div class="card-header">
                        <h5 class="card-title">{{ $post->title }}</h5>
                    </div>
                    <div class="card-body ">
                        <p class="card-text">{{ $post->description }}</p>
                        <img src="/images/posts/{{ $post->image }}" class="card-img" alt="">
                        <a href="{{ route('posts.edit', $post->id) }}" class="text-decoration-none">
                            <button type="button" class="btn btn-primary my-2">Edit post</button>
                        </a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger my-2">Delete post</button>
                        </form>
                    </div>
                </div>
            <div class="col-2"></div>
        </div>
    </div>
@endsection
