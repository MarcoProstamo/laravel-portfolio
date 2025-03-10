@extends ("layouts.projectsLayout")

@section('title', 'Edit a Project')

@section('content')
    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-control mb-2">
            <label for="project_name">Project Name</label>
            <input type="text" name="project_name" class="form-control" id="project_name" placeholder="Enter Project Name..."
                value="{{ $project->project_name }}">
        </div>
        <div class="form-control mb-2">
            <label for="client_name">Client Name</label>
            <input type="text" name="client_name" class="form-control" id="client_name"
                placeholder="Enter Client Name..." value="{{ $project->client_name }}">
        </div>
        <div class="form-control mb-2">
            <label for="project_description">Project Description</label>
            <input type="text" name="project_description" class="form-control" id="project_description"
                placeholder="Enter Project Description..." value="{{ $project->project_description }}">
        </div>
        <input type="submit" value="Edit Project" class="btn btn-primary">
    </form>
@endsection
