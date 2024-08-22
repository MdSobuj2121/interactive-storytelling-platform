@extends('layouts.app')

@section('title', 'Add Node to ' . $story->title)

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add a New Node to "{{ $story->title }}"</div>

                <div class="card-body">
                    <form action="{{ route('story-nodes.store', $story) }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" id="title" name="title" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="content">Content:</label>
                            <textarea id="content" name="content" class="form-control" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Node</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
