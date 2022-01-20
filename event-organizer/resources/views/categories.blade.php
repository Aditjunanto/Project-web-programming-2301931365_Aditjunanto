@extends('layouts/main')
    @section('container')
    <div class="container">
        <div class="title-category mb-5">
            <h2 class="text-center"> Categories is :  </h2>
        </div>
   
        <div class="container">
            <div class="row">
            
            <div class="col-md-4">
                    <a href="/news">
                    <div class="card bg-dark text-white mb-4">
                        <img src="https://source.unsplash.com/480x360?all" class="card-img" alt="">
                        <div class="card-img-overlay flex p-0">
                            <h5 class="card-title text-center" style="background-color: rgba(0,0,0,0.7)"> All News</h5>
                            
                        </div>
                    </div>
                    </a>
                </div>

            @foreach($categories as $category)
                <div class="col-md-4">
                    <a href="/categories/{{ $category->slug }}">
                    <div class="card bg-dark text-white mb-4">
                        <img src="https://source.unsplash.com/480x360?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay flex p-0">
                            <h5 class="card-title text-center" style="background-color: rgba(0,0,0,0.7)"> {{ $category->name }} </h5>
                            
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
    @endsection

    