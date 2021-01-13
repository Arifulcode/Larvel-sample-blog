@extends('layouts.admin.master')
@section('title','Create new post')
@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create new blog</h4>
                <form class="forms-sample" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('admin.post._form')
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection