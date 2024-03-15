
<table border="1">
    <tr>
        <th>Medicine Name</th>
        <th>Medicine Price</th>
    </tr>
    @foreach($medicines as $medicine)

        <tr>
            <td><p>{{$medicine->medicineName}}</p></td>
            <td><p> ${{$medicine->medicinePrice}}</p></td>
            <td><a href="{{route('medicine.edit', ['medicine'=>$medicine])}}">Edit</a>

                <form action="{{route('medicine.destroy', ['medicine'=>$medicine])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

