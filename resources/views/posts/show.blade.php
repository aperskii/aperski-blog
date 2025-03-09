@extends('layouts.app')
@section('title')
    Show
@endsection
@section('content')
    <div class="container">
        <div class="card mt-4">
            <h5 class="card-header">Post Info</h5>
            <div class="card-body">
                <h5 class="card-title">Title: {{$post['title']}}</h5>
                <p class="card-text">Description : {{$post['description']}}</p>
            </div>
        </div>

        <div class="card mt-4">
            <h5 class="card-header">Post Creator Info</h5>
            <div class="card-body">
                <h5 class="card-title">Name: {{$post['posted_by']}}</h5>
                <p class="card-text">Email : sdfsdfs@live.com</p>
                <p class="card-text">Created At : {{$post['created_at']}}</p>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>

@endsection
