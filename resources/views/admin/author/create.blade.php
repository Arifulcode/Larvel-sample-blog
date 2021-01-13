@extends('layouts.admin.master')
@section('title','Create new author')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create new author</h4>
                    <form class="forms-sample" action="{{ route('author.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="author name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" id="name" placeholder="Author email">
                        </div>
                        <div class="form-group">
                            <label for="about">About</label>
                            <textarea name="about" class="form-control" id="about" placeholder="About author"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Save</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection