
<table border="1">
    <tr>
        <th>Customer Name</th>
        <th>Phone Number</th>
        <th>Age</th>
        <th>Address</th>
    </tr>
    @foreach($customers as $customer)

        <tr>
            <td><p>{{$customer->Name}}</p></td>
            <td><p> ${{$customer->phoneNumber}}</p></td>
            <td><p>{{$customer->Age}}</p></td>
            <td><p>{{$customer->Address}}</p></td>
            <td><a href="{{route('customer.edit', ['customer'=>$customer])}}">Edit</a>

                <form action="{{route('customer.destroy', ['customer'=>$customer])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

