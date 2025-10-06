    @props(['clients'=>$clients])
    <div class="container-sm pt-5" style="margin-left: 250px;">
    <x-heading>All Clients</x-heading>
    <a href="/clients/create" class="btn btn-success m-3">Create Client</a>
<table class="table m-3">
<thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Company</th>
        <th scope="col">VAT</th>
        <th scope="col">Address</th>
    </tr>
</thead>
<tbody>
    @foreach ($clients as $client )
    <tr>
        <td>{{$client->name}}</td>
        <td>{{$client->company}}</td>
        <td>{{$client->VAT}}</td>
        <td>{{$client->address}}</td>
        <td>
    <a href="{{route('clients.edit',$client)}}" class="btn btn-sm btn-primary">Edit</a></td>
        @can('delete_clients')
        <td>
            <form onsubmit="return confirm('Are you sure ?')"
                id="delete-form" method="POST"
                action="{{route('clients.destroy',$client)}}"
                class="hidden">
                @csrf
                @method("DELETE")
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
        </td>
        @endcan
    </tr>
    @endforeach
</tbody>
</table>
</div>
