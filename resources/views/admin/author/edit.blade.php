@extends('layouts.admin.master')
@section('title','Edit author')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit author</h4>
                    <form class="forms-sample" action="{{ route('author.update',$author->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input value="{{ $author->name }}" name="name" type="text" class="form-control" id="name" placeholder="author name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input value="{{ $author->email }}" name="email" type="email" class="form-control" id="name" placeholder="Author email">
                        </div>
                        <div class="form-group">
                            <label for="about">About</label>
                            <textarea name="about" class="form-control" id="about" placeholder="About author">{{ $author->about }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection