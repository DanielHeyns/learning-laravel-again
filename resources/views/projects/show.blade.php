@extends('layout')

@section('content')

<h1>{{$project->title}}</h1>

<div class="content"> {{$project->description}}</div>

<p>
        <a href="/projects/{{$project->id}}/edit">Edit</a>
</p>

@if($project->tasks->count())
<?php
    $tasks=$project->tasks->sortBy('created_at');
?>
    <div>
        <ul>
            @foreach($tasks as $task)
                <div>
                    <form method = "POST" action="/tasks/{{$task->id}}">
                        @method('PATCH')
                        @csrf
                            <label class="checkbox" for="completed">
                            <input type="checkbox" name="completed" onChange="this.form.submit()" @if($task->completed) checked @endif>
                            {{$task->description}}
                        </label>
                    </form>
                </div>
            @endforeach
        </ul>
    </div>
@endif


@endsection