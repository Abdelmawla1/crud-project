@extends('layouts.master')

@section('content')
    <div class="main-content mx-5 my-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Edit Post</h4>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-primary mx-1" href="#">Cancel</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('post.update', $post->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div>
                        <img src="{{ asset("storage/images/$post->image") }}" alt="" width="250">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Image</label>
                        <input type="file" class="form-control" name="" id="">
                    </div>
                    <div class="form-group mt-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" name="" value="{{ $post->title }}">
                    </div>
                    <div class="form-group mt-3">
                        <label for="" class="form-label">Category</label>
                        <select class="form-control" name="" id="">
                            <option value="">Select</option>
                            @if(count($categories) > 0)
                                @foreach($categories as $category)
                                    <option
                                        {{$post->id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="" class="form-label">Description</label>
                        <textarea class="form-control" name="" id="" cols="30" rows="10">{{ $post->description }}</textarea>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
