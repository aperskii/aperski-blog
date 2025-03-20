@extends('layouts.app')
@section('title')
    Create
@endsection
@section('content')
    <form method="POST" ACTION="{{route('posts.store')}}">
        @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input name="title" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Post Creator</label>
                <select name="post_creator" class="form-control">
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>

@endsection
