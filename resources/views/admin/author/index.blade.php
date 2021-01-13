@extends('layouts.admin.master')
@section('title','List of author')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Authors</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                Serial
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                About
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($authors as $author)
                            <tr>
                                <td>
                                    {{ $author->id }}
                                </td>
                                <td>
                                    {{ $author->name }}
                                </td>
                                <td>
                                    {{ $author->email }}
                                </td>
                                <td>
                                    {{ $author->about }}
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('author.edit',$author->id) }}">Edit</a>
                                    <form class="d-inline-block" action="{{ route('author.destroy',$author->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you confirm ?')">Destroy</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection