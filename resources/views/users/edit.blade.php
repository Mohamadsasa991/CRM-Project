<x-nav />
    <x-heading>Edit User</x-heading>
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
        <form action="/users/{{$user->id}}" method="POST">
            @csrf
            @method('patch')
        <div class="mb-3">
            <label for="loginPassword" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="loginPassword" value="{{$user->name}}" required />
        </div>
        <div class="mb-3">
            <label for="loginPassword" class="form-label">Email</label>
            <input name="email" type="text" class="form-control" id="loginPassword" value="{{$user->email}}" required />
        </div>
        <button type="submit" class="btn btn-primary w-100">Edit</button>
        </form>
</div>
</div>
</div>
