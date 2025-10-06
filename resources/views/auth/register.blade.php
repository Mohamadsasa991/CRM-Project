<x-nav />
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-sm" style="width: 350px;">
      <div class="card-body">
        <h3 class="card-title text-center mb-4">Register</h3>
        <form method="POST" action="/register">
            @csrf
          <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input name="name" type="text" class="form-control" id="fullName" placeholder="Your full name" required />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com" required />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Enter password" required />
          </div>
          <button type="submit" class="btn btn-success w-100">Register</button>
        </form>
      </div>
    </div>
  </div>
