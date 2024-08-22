@extends('layouts.app')

@section('title', 'Create a New Story')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a New Story</div>

                <div class="card-body">
                    <form action="{{ route('stories.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" id="title" name="title" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea id="description" name="description" class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Story</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
