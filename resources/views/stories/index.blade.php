@extends('layouts.app')

@section('title', 'Stories List')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>Stories List</h4>
                    <a href="{{ route('stories.create') }}" class="btn btn-primary float-right">Create New Story</a>
                </div>

                <div class="card-body">
                    @if($stories->isEmpty())
                        <div class="alert alert-info">No stories found.</div>
                    @else
                        <div class="list-group">
                            @foreach($stories as $story)
                                <a href="{{ route('stories.show', $story) }}" class="list-group-item list-group-item-action">
                                    <h5 class="mb-1">{{ $story->title }}</h5>
                                    <p class="mb-1">{{ \Str::limit($story->description, 100) }}</p>
                                    <small>Created on {{ $story->created_at->format('d M Y') }}</small>
                                </a>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
