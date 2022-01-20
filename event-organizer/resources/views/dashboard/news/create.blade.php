@extends('dashboard.layouts.main')
    @section('container')

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Create Post</h1>
        </div>

        <div class="container card text-dark bg-light mb-3 col-md-9 mb-3 g-4" style="max-width: 75%;">
        
        <div class="card-body">
            
        <form action="/dashboard/news"  method="post" >
            @csrf
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select id="disabledSelect" name="category_id" class="form-select" value="">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }} </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label ms-1">title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="emailHelp" required value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Content</label>
                <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="5"></textarea>
              </div>
            </form>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">excerpt</label>
                <textarea class="form-control" name="slug" id="exampleFormControlTextarea1" rows="2"></textarea>
              </div>
            </form>

            <div class="mb-3">
              <label for="formFileDisabled" class="form-label">no file Choosen</label>
              <input class="form-control" type="file" id="choose fFle" disabled>
            </div>
            <a href="">
                <button class="btn btn-primary" type="submit">Submit</button>
            </a>
            
        </form>
            
        </div>
        </main>
        </div>
    </div>

    @endsection