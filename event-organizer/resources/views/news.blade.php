@extends('layouts/main')
    @section('container')

    <!-- card -->
    <div class="container mb-5">
        <div class="title-category mb-5">
            <h2 class="text-center">{{ $title }} </h2>
        </div>
    

    <!-- mini card -->
        
            <div class="container">
                <div class="row">
                @foreach($news->skip(1) as $news)
                    <div class="col-md-4 mb-3 g-4">
                    <div class="card text-dark bg-light card border-primary" >

                        <div class="position-absolute bg-dark p-2 text-light"><a href="/categories/{{ $news->category->slug }}" class="text-decoration-none text-light">{{ $news->category->name }}</a></div>

                        <img src="https://source.unsplash.com/480x360?{{ $news->category->name }}" class="card-img-top" alt="{{ $news->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $news->title }}</h5>
                            <small>
                            <p>By. <a href="/authors/{{ $news->author->username }}" class="text-decoration-none">{{ $news->author->name }}</a> in <a href="/categories/{{ $news->category->slug }}" class="text-decoration-none">{{ $news->category->name }}</a></p>
                            <p class="card-text">{{ $news->excerpt }}</p>
                            <a href="/news/{{ $news->slug }}" class="btn btn-primary">CHECK IT OUT</a>
                            </small>
                        </div>
                    </div>
                    </div>
                @endforeach
                </div>
            </div>
    @endsection

    