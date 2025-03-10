@extends ('layouts.projectsLayout')

@section('title', 'All Projects')

@section('content')

    <a class="btn btn-primary" href="./projects/create">Add a Project</a>

    <ul>
        @foreach ($projects as $project)
            <li>{{ $project['project_name'] }}</li>
            <li>{{ $project['client_name'] }}</li>
            <li>{{ $project['project_description'] }}</li>
            <br>
        @endforeach
    </ul>
@endsection
