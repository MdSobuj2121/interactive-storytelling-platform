@extends('layouts.app')

@section('title', $story->title)

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $story->title }}</div>

                <div class="card-body">
                    <p>{{ $story->description }}</p>

                    <a href="{{ route('story-nodes.create', $story) }}" class="btn btn-primary">Add a Story Node</a>

                    <div class="mt-3">
                        @foreach($story->nodes as $node)
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5>{{ $node->title }}</h5>
                                </div>
                                <div class="card-body">
                                    <p>{{ $node->content }}</p>
                                    <a href="{{ route('story-nodes.show', $node) }}" class="btn btn-info">View Node</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
