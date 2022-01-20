@extends('layouts/main')
    @section('container')

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h1 class="mb-3">{{ $post->title }}</h1>
                    <img src="https://source.unsplash.com/400x300?{{ $post->category->name }}" class="card-img-top mb-3" alt="{{ $post->category->name }}">
                    <small>
                    <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }} </a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                    </small>
                    <article class="my-3 fs-5">
                    {!! $post->body !!}
                    </article>
                    <a href="/news" class="d-block mt-3">back to news</a>
                </div>
            </div>
        </div>
    @endsection


    
