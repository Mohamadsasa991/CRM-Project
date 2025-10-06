<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark"
        style="width: 250px; height: 100vh; position: fixed;">
        <a href="/dashboard"
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-4">MyCRM</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <x-nav-link href="/dashboard" :active="request()->is('dashboard')">Dashboard</x-nav-link>
            </li>
            <li>
                @can('manage_users')
                <x-nav-link href="/users" :active="request()->routeis('users.*')">Users</x-nav-link>
                @endcan
            </li>
            <li>
                <x-nav-link href="/clients" :active="request()->routeis('clients.*')">Clients</x-nav-link>

            </li>
            <li>
                <x-nav-link href="/projects" :active="request()->routeIs('projects.*')">Projects</x-nav-link>
            </li>
            <li>
                <x-nav-link href="/tasks" :active="request()->routeis('tasks.*')">Tasks</x-nav-link>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            @auth
                <a class="btn btn-primary" href="{{ route('logout') }}">Log out</a><span style="font-size: 12px;"
                    class="p-2">{{ Auth::user()->name }}</span>
            @endauth
            @guest
                <a class="btn btn-primary" href="/login">Login</a>
            @endguest
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>
