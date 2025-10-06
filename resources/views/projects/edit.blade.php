    <x-nav />
        <x-heading>Edit Project</x-heading>
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
            <form action="/projects/{{$project->id}}" method="POST">
                @csrf
                @method('patch')
            <div class="mb-3">
                <label for="loginPassword" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="loginPassword" value="{{$project->title}}" required />
            </div>
            <div class="mb-3">
                <label for="loginPassword" class="form-label">desc</label>
                <input name="desc" type="text" class="form-control" id="loginPassword" value="{{$project->desc}}" required />
            </div>
            <div class="mb-3">
                <label for="loginPassword" class="form-label">Deadline</label>
                <input name="deadline" type="text" class="form-control" id="loginPassword" value="{{$project->deadline}}" required />
            </div>

            <div class="mb-3">
                <label for="loginPassword" class="form-label">Assigned Client</label>
                <select id="assigned_user" name="assigned_user" class="form-select">
            @foreach ($projects as $project )
            <option value="Walter-Mertz">{{$project->user->name}}</option>
            @endforeach
        </select>
            </div>

            <div class="mb-3">
        <label for="assigned_client" class="form-label">Assigned Company</label>
        <select id="assigned_client" name="assigned_client" class="form-select">
            @foreach ($projects as $project )
            <option value="{{old('assigned_client')}}">{{$project->client->company}}</option>
            @endforeach
        </select>
    </div>

    <!-- Status -->
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select id="status" name="status" class="form-select">
            @foreach (\App\Enums\ProjectStatus::cases() as $status)
                    <option value="{{$status->value}}" @selected(old('status')==$status->value)>
                        {{$status}}
                    </option>
                @endforeach
        </select>
    </div>

            <button type="submit" class="btn btn-primary w-100">Edit</button>
            </form>
    </div>
    </div>
    </div>
