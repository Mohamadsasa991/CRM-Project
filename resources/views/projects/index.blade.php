        <div class="container-fluid">
        <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 bg-dark text-white min-vh-100">
        <x-nav />
        </div>

        <!-- Main Content -->
        <div class="col-md-10 pt-5">
        <x-heading>All Projects</x-heading>
        <a href="/projects/create" class="btn btn-success m-3">Create Project</a>

        <table class="table m-3 table-striped table-bordered">
        <thead>
        <tr>
        <th>Title</th>
        <th>Desc</th>
        <th>Deadline</th>
        <th>Assign-user</th>
        <th>Assign-client</th>
        <th>Status</th>
        <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($projects as $project)
        <tr>
        <td>{{ $project->title }}</td>
        <td>{{ $project->desc }}</td>
        <td>{{ $project->deadline }}</td>
        <td>{{ $project->user->name ?? 'N/A' }}</td>
        <td>{{ $project->client->name ?? 'N/A' }}</td>
        <td>{{ $project->status }}</td>
        <td>
        <a href="/projects/{{ $project->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
        @can('delete_projects')
        <form method="POST" onsubmit="return confirm('Are you sure ?')" action="/projects/{{ $project->id }}"
            style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn mt-2 btn-sm btn-danger">Delete</button>
        </form>
        @endcan
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
        <div class="mx-4">{{ $projects->links() }}</div>
        </div>
        </div>
        </div>
