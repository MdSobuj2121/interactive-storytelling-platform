@extends('layouts.app')

@section('title', $node->title)

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $node->title }}</div>

                <div class="card-body">
                    <p>{{ $node->content }}</p>

                    <form action="{{ route('choices.store', $node) }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="text">Choice Text:</label>
                            <input type="text" id="text" name="text" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="next_node_id">Next Node ID (optional):</label>
                            <input type="number" id="next_node_id" name="next_node_id" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Add Choice</button>
                    </form>

                    <h3 class="mt-4">Choices:</h3>
                    <ul class="list-group">
                        @foreach($node->choices as $choice)
                            <li class="list-group-item">
                                {{ $choice->text }} - Next Node ID: {{ $choice->next_node_id }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
