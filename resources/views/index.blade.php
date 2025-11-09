@extends('layouts.master')

@section('content')
    <div class="main-content mx-5 my-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>All Posts</h4>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-success mx-1" href="{{ route('post.create') }}">Create</a>
                        <a class="btn btn-dark mx-1" href="#">Trashed</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width: 10%">Image</th>
                        <th scope="col" style="width: 20%">Title</th>
                        <th scope="col" style="width: 30%">Description</th>
                        <th scope="col" style="width: 10%">Category</th>
                        <th scope="col" style="width: 10%">Publish Date</th>
                        <th scope="col" style="width: 20%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($posts) > 0)
                        @foreach($posts as $post)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>
                                    <img src="{{ asset("storage/images/$post->image") }}" alt="" width="100">
                                </td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->description}}</td>
                                <td>{{$post->category->name}}</td>
                                <td>{{ $post->created_at->format('d M Y') }}</td>
                                <td>
                                    <a class="btn btn-sm btn-success" href="{{ route('post.show', $post->id) }}">Show</a>
                                    <a class="btn btn-sm btn-primary" href="{{ route('post.edit', $post->id) }}">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
