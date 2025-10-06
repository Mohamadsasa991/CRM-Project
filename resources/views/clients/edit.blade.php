<x-nav />
<x-heading>Edit Client</x-heading>
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
    <form action="{{route('clients.update',$client)}}" method="POST">
        @csrf
        @method('PUT')
    <div class="mb-3">
        <label for="loginPassword" class="form-label">Name</label>
        <input name="name" type="text" class="form-control"  value="{{$client->name}}" required />
    </div>
    <div class="mb-3">
        <label for="loginPassword" class="form-label">Company</label>
           <select  name="company" class="form-select">
            @foreach ($companies as $myCompany )
            <option value="{{$myCompany->company}}">{{$myCompany->company}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="loginPassword" class="form-label">VAT</label>
        <input name="VAT" type="text" class="form-control" value="{{$client->VAT}}" required />
    </div>
    <div class="mb-3">
        <label for="loginPassword" class="form-label">Address</label>
        <input name="address" type="text" class="form-control"  value="{{$client->address}}" required />
    </div>
    <button type="submit" class="btn btn-primary w-100">Edit</button>
    </form>
</div>
</div>
</div>
