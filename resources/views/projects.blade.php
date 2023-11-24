@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <div>
        <h1>Projects</h1>
        @foreach($projects as $project)
            <div class="project-card">
                <h2>{{ $project->title }}</h2>
                <p>{{ $project->description }}</p>
                <!-- Add more project details as needed -->
            </div>
        @endforeach
    </div>
@endsection
