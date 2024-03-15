<header>
    <h2>Medicine</h2>
    <h3>Add New Medicine</h3>
</header>
<form action="{{route('medicine.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Medicine Name</label>
        <input type="text" name="medicineName" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" name="medicinePrice" id="price" class="form-control">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Medicine</button>
    </div>
</form>
