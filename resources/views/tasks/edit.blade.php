    <x-nav />
        <x-heading>Edit Task</x-heading>
    <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-sm" style="width: 360px;">
    <div class="card-body">
        <ul class="nav nav-tabs mb-3" id="authTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">Edit</button>
        </li>
        </ul>
        <div class="tab-content" id="authTabContent">
        <!-- Login Form -->
        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
            <form action="{{route('tasks.update',$task)}}" method="POST">
                @csrf
                @method('PUT')
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input name="title" type="text" class="form-control"  value="{{$task->title}}" required />
            </div>
            <div class="mb-3">
                <label class="form-label">desc</label>
                <input name="desc" type="text" class="form-control" value="{{$task->desc}}" required />
            </div>
            <div class="mb-3">
                <label for="loginPassword" class="form-label">Deadline</label>
                <input name="deadline" type="text" class="form-control" value="{{$task->deadline}}" required />
            </div>

            <div class="mb-3">
                <label class="form-label">Assign User</label>
                 <select id="status" name="assign_user" class="form-select">
                    @foreach ($users as $user )
                    <option value="{{$task->user}}">{{$user->name}}</option>
                    @endforeach
        </select>
            </div>

    <!-- Status -->
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select id="status" name="status" class="form-select">
            <option value="Open">open</option>
            <option value="busy">busy</option>
        </select>
    </div>

            <button type="submit" class="btn btn-primary w-100">Edit</button>
            </form>
    </div>
    </div>
    </div>
