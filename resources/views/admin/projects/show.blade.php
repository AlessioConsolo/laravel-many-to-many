@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>{{ $project->title }}</h1>
        <p><strong>Descrizione:</strong> {{ $project->description }}</p>

        @if($project->cover_image)
            <img src="{{ asset('storage/' . $project->cover_image) }}" alt="Cover Image" class="cover-image">
        @endif

        <h3>Tecnologie Utilizzate:</h3>
        <ul>
            @foreach($project->technologies as $technology)
                <li>{{ $technology->name }}</li>
            @endforeach
        </ul>

        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary mt-2">Torna alla lista dei progetti</a>
    </div>
@endsection
