@extends('layouts.app')
@section('title')
    Index
@endsection
@section('content')
    <div class="text-center">
        <a href="{{route('posts.create')}}" class="btn btn-success">Create Post</a>
    </div>

    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Posted By</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post['id']}}</th>
                <td>{{ $post['title'] }}</td>
                <td>{{ $post['posted_by'] }}</td>
                <td>{{ $post['created_at'] }}</td>
                <td>
                    <a href="{{route('posts.show', $post['id'])}}" class="btn btn-info">View</a>
                    <a href="/posts/edit/{{$post['id']}}" class="btn btn-primary">Edit</a>
                    <a href="/posts/delete/{{$post['id']}}" class="btn btn-danger">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
