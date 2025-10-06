<div class="container-fluid">
<div class="row">
<!-- Sidebar -->
<div class="col-md-2 bg-dark text-white min-vh-100">
<x-nav />
</div>

<!-- Main Content -->
<div class="col-md-10 pt-5">
<x-heading>Create new task</x-heading>
    <x-error />
<div class="container mt-5">
<div class="card">
<div class="card-header">
<h4>Create task</h4>
</div>
<div class="card-body">
<form action="/tasks" method="POST">
    @csrf
    <!-- Title -->
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" id="title" name="title" class="form-control" placeholder="Enter task title">
    </div>

    <!-- Description -->
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea id="description" name="desc" class="form-control" rows="5" placeholder="task description..."></textarea>
    </div>

    <!-- Deadline -->
    <div class="mb-3">
        <label for="deadline" class="form-label">Deadline</label>
        <input type="date" id="deadline" name="deadline" class="form-control">
    </div>

    <!-- Assigned User -->
    <div class="mb-3">
        <label for="assigned_user" class="form-label">Assigned User</label>
        <select id="assigned_user" name="assigned_user" class="form-select">
              @foreach ($tasks as $task )
            <option value="Walter-Mertz">{{$task->user->name}}</option>
            @endforeach
        </select>
    </div>

    <!-- Assigned Client -->
    <!-- Status -->
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select id="status" name="status" class="form-select">
            <option value="Open">open</option>
            <option value="busy">busy</option>
        </select>
    </div>

    <!-- Save Button -->
    <div class="mb-3 text-end">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

