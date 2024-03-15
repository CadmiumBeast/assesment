<form action="{{route('medicine.update',['medicine'=>$medicine])}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Medicine Name</label>
        <input type="text" name="medicineName" id="name" class="form-control" value="{{$medicine ->medicineName}}">
    </div>
    <div class="form-group">
        <label for="price">Medicine Price</label>
        <input type="text" name="medicinePrice" id="price" class="form-control" value="{{$medicine ->medicinePrice}}">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Edit Medicine</button>
    </div>
</form>
