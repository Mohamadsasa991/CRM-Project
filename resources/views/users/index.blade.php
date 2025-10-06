<div class="d-flex">
    <x-nav />
    <div class="container-sm pt-5" style="margin-left: 250px;">
        <x-heading>All Users</x-heading>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="/users/{{ $user->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                        </td>
                        <td>
                            <form onsubmit="return confirm('are you sure ?')" id="delete-form-{{ $user->id }}"
                                method="POST" action="{{ route('users.destroy', $user) }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
