@extends('layout')

@section('content')
    <h1>Create a New Project</h1>

    <form method="POST" action="/projects">
        {{csrf_field()}}

        <div>
            <input type="text" name="title" placeholder="Project Title" required>
        </div>

        <div>
            <textarea name="description" placeholder="Project Description" required></textarea>
        </div>

        <input type="submit" value="Create Project">

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