@extends('layout')

@section('content')
    <h1>Create a New Project</h1>

    <form method="POST" action="/projects">
        {{csrf_field()}}

        <div class="form-group">
        <input type="text" name="title" class="form-control" placeholder="Project Title" value="{{old('title')}}" required>
        </div>

        <div class="form-group">
            <textarea name="description" class="form-control" placeholder="Project Description" required>{{old('description')}}</textarea>
        </div>

        <input type="submit" value="Create Project" class="btn btn-primary">

        @if($errors->any())
        <div class="notification is-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </form>
@endsection