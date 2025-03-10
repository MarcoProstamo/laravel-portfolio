@extends ('layouts.projectsLayout')

@section('title', 'Single Project')

@section('content')
    <form action="{{ route('projects.destroy', $project) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete Project" class="btn btn-danger mb-3">
    </form>

    <div class="card">
        <div class="card-header">
            <h3>{{ $project->project_name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Client Name:</strong> {{ $project->client_name }}</p>
            <p><strong>Project Description:</strong> {{ $project->project_description }}</p>
        </div>
    </div>
    <a href="{{ route('projects.edit', $project) }}" class="btn btn-warning mt-2">Edit Project</a>
    <a href="{{ route('projects.index') }}" class="btn btn-primary mt-2">Back to Projects</a>
@endsection
