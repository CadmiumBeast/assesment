<header>
    <h2>Customer</h2>
    <h3>Add New Customer</h3>
</header>
<form action="{{route('customer.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Customer Name</label>
        <input type="text" name="Name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="price">Phone Number</label>
        <input type="text" name="phoneNumber" id="pnumber" class="form-control">
    </div>
<div class="form-group">
        <label for="quantity">Age</label>
        <input type="text" name="Age" id="age" class="form-control">
    <div class="form-group">
        <label for="quantity">Address</label>
        <input type="text" name="Address" id="address" class="form-control">

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Customer</button>
    </div>
</form>
