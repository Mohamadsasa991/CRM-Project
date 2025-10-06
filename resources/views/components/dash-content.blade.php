@props(['users'=>$users,'clients'=>$clients,'projects'=>$projects,'tasks'=>$tasks])
<div class="container-fluid" style="margin-left: 250px; padding: 2rem;">
    <h1 class="mb-4 text-primary">Dashboard Overview</h1>

    <div class="row mb-4">
        <!-- Users Card -->
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <p class="card-text display-6">{{$users->count()}}</p>
                </div>
            </div>
        </div>

        <!-- Clients Card -->
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Clients</h5>
                    <p class="card-text display-6">{{$clients->count()}}</p>
                </div>
            </div>
        </div>

        <!-- Projects Card -->
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Projects</h5>
                    <p class="card-text display-6">{{$projects->count()}}</p>
                </div>
            </div>
        </div>

        <!-- Tasks Card -->
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Tasks</h5>
                    <p class="card-text display-6">{{$tasks->count()}}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity Table -->
    <div class="card">
        <div class="card-header">
            Current Tasks
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>User</th>
                        <th>Deadline</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task )
                    <tr>
                        <td>{{$task->title}}</td>
                        <td>{{$task->user->name}}</td>
                        <td>{{$task->deadline}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
