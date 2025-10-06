<div class="d-flex">
<x-nav />
<div class="container-fluid" style="margin-left: 250px; padding: 2rem;">
<h1 class="text-primary text-center">Create New Client</h1>
<div class="container mt-5">
<div class="card">
<div class="card-header">
<h4>Create Client</h4>
</div>
<div class="card-body">
<form action="/clients" method="POST">
    @csrf
        <div class="mb-3">
        <label for="title" class="form-label">Name</label>
        <input type="text" id="title" name="name" class="form-control" placeholder="Enter Client name">
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Company</label>
        <input type="text" id="title" name="company" class="form-control" placeholder="Enter project company">
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">VAT</label>
        <input type="text" id="title" name="VAT" class="form-control" placeholder="Enter VAT">
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Address</label>
        <input type="text" id="title" name="address" class="form-control" placeholder="Enter Your Address">
    </div>
    <!-- Save Button -->
    <div class="mb-3 text-end">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>
