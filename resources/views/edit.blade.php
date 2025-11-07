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
                <form action="" method="post">
                    <div class="form-group">
                        <label for="" class="form-label">Image</label>
                        <input type="file" class="form-control" name="" id="">
                    </div>
                    <div class="form-group mt-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" name="" id="">
                    </div>
                    <div class="form-group mt-3">
                        <label for="" class="form-label">Category</label>
                        <select class="form-control" name="" id="">
                            <option value="">select 1</option>
                            <option value="">select 2</option>
                            <option value="">select 3</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="" class="form-label">Description</label>
                        <textarea type="file" class="form-control" name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
