@extends ("layouts.projectsLayout")

@section('title', 'Create New Project')

@section('content')
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="form-control mb-2">
            <label for="project_name">Project Name</label>
            <input type="text" name="project_name" class="form-control" id="project_name" placeholder="Enter Project Name...">
        </div>
        <div class="form-control mb-2">
            <label for="client_name">Client Name</label>
            <input type="text" name="client_name" class="form-control" id="client_name"
                placeholder="Enter Client Name...">
        </div>
        <div class="form-control mb-2">
            <label for="project_description">Project Description</label>
            <input type="text" name="project_description" class="form-control" id="project_description"
                placeholder="Enter Project Description...">
        </div>
        <input type="submit" value="Create Project" class="btn btn-primary">
    </form>
@endsection
