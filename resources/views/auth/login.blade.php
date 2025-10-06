<x-nav />
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-sm" style="width: 360px;">
        <div class="card-body">
            <ul class="nav nav-tabs mb-3" id="authTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login"
                        type="button" role="tab">Login</button>
                </li>
            </ul>
            <div class="tab-content" id="authTabContent">
                <!-- Login Form -->
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <form action="{{ route('newLogin') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <x-error />
                            <label for="loginEmail" class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control" id="loginEmail"
                                placeholder="name@example.com" required />
                        </div>
                        <div class="mb-3">
                            <label for="loginPassword" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="loginPassword"
                                placeholder="Enter password" required />
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                        <a href="/register" class="btn text-white btn-primary w-100 mt-2">Register</a>
                    </form>
                </div>
            </div>
        </div>
