@extends('layout')

@section('content')
<h1 class="title">Edit Project</h1>
<form method="POST" action="/projects/{{$project->id}}">
    {{csrf_field()}}
    {{method_field('PATCH')}}

    <div class="field">
        <label class="label" for="title">Title</label>
        <div class="control">
            <input type="text" name="title" class="input" placeholder="Project Title" value="{{$project->title}}"" required>
        </div>
    </div>

    <div class="field">
        <label class="label" for="description">Description</label>
        <div class="control">
            <textarea name="description" class="input" placeholder="Project Description" required>{{$project->description}}</textarea>
        </div>
    </div>

    <input type="submit" value="Update Project">


</form>

<form action="/projects/{{$project->id}}" method="POST">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <div class = "field">
        <div class="control">
            <input type="submit" value="Delete Project LUL">
        </div>
    </div>
</form>
@endsection