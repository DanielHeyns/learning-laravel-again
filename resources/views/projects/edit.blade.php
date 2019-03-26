@extends('layout')

@section('content')
<h1 class="title">Edit Project</h1>
<form method="POST" action="/projects/{{$project->id}}">
    {{csrf_field()}}
    {{method_field('PATCH')}}

    <div class="field">
        <label class="label" for="title">Title</label>
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Project Title" value="{{$project->title}}"" required>
        </div>
    </div>

    <div class="field">
        <label class="label" for="description">Description</label>
        <div class="control">
            <textarea name="description" class="form-control" placeholder="Project Description" required>{{$project->description}}</textarea>
        </div>
    </div>

    <input type="submit" class="btn btn-primary" value="Update Project" style ="margin-top:1%">


</form>

<form action="/projects/{{$project->id}}" method="POST">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <div class = "field">
        <div class="control" style ="margin-top:1%">
            <input type="submit" class="btn btn-primary" value="Delete Project LUL">
        </div>
    </div>
</form>
@endsection