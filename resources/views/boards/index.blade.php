@extends('layouts.main')

@section('content')

<div class="section">
    <div class="container">
    @foreach($boards as $board)
        <h3>{{ $board->title }}</h3>
            @foreach($board->tasks as $task)
                <ul>
                    <li>{{$task->task}}</li>
                </ul>
            @endforeach
    @endforeach
    </div>
</div>


@endsection
