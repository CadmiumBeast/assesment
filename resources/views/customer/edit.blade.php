<form action="{{route('customer.update',['customer'=>$customer])}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Customer Name</label>
        <input type="text" name="Name" id="Name" class="form-control" value="{{$customer ->Name}}">
    </div>
    <div class="form-group">
        <label for="price">Phone Number</label>
        <input type="text" name="phoneNumber" id="price" class="form-control" value="{{$customer ->phoneNumber}}">
    </div>
    <div class="form-group">
        <label for="quantity">Age</label>
        <input type="text" name="Age" id="quantity" class="form-control" value="{{$customer ->Age}}">
    </div>
    <div class="form-group">
        <label for="quantity">Address</label>
        <input type="text" name="Address" id="description" class="form-control" value="{{$customer ->Address}}">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Edit Medicine</button>
    </div>
</form>
