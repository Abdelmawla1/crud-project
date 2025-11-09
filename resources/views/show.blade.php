@extends('layouts.master')

@section('content')
    <div class="main-content mx-5 my-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Show Post</h4>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-primary mx-1" href="{{ route('post.index') }}">Cancel</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div>
                    <img src="{{ asset("storage/images/$post->image") }}" alt="" width="250">
                </div>
                <div class="form-group mt-3">
                    <h4 class="font-weight-bold">Title</h4>
                    <h2 class="font-weight-bold">{{ $post->title }}</h2>
                </div>
                <div class="form-group mt-3">
                    <h4 class="font-weight-bold">Published at</h4>
                    <h2 class="font-weight-bold">{{ $post->created_at->format('d M Y') }}</h2>
                </div>
                <div class="form-group mt-3">
                    <h4 class="font-weight-bold">Category</h4>
                    <span class="font-weight-bold">{{ $post->category->name }}</span>
                </div>
                <div class="form-group mt-3">
                    <h4 class="font-weight-bold">Description</h4>
                    <p class="lead">{{ $post->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
