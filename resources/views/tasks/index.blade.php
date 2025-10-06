<div class="container-fluid">
<div class="row">
<!-- Sidebar -->
<div class="col-md-2 bg-dark text-white min-vh-100">
<x-nav />
</div>

<!-- Main Content -->
<div class="col-md-10 pt-5">
<x-heading>All Tasks</x-heading>
<a href="/tasks/create" class="btn btn-success m-3">Create Task</a>

<table class="table m-3 table-striped table-bordered">
<thead>
<tr>
<th>Title</th>
<th>Desc</th>
<th>Deadline</th>
<th>Assign-user</th>
<th>Status</th>
</tr>
</thead>
<tbody>
@foreach ($tasks as $task)
<tr>
    <td>{{ $task->title }}</td>
    <td>{{ $task->desc }}</td>
    <td>{{ $task->deadline }}</td>
    <td>{{ $task->user->name ?? 'N/A' }}</td>
    <td>{{ $task->status }}</td>
    <td>
        <a href="/tasks/{{ $task->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
        @can('delete_tasks')
        <form method="POST" action="{{route('tasks.destroy',$task)}}"
         style="display:inline-block;"
         onsubmit="return confirm('Are you sure ?')"
         >
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

</div>
</div>
</div>
