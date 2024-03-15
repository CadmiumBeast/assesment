@extends('layouts.app')

@section('content')
    <div>
        <table class="border-solid border-2 border-black m-4">
            <tr>
                <th class="px-5 border-solid border-2 border-black">Customer Name</th>
                <th class="px-5 border-solid border-2 border-black">Phone Number</th>
                <th class="px-5 border-solid border-2 border-black">Address</th>
                <th class="px-5 border-solid border-2 border-black">Age</th>
                <th class="px-5 border-solid border-2 border-black">Edit</th>
                <th class="px-5 border-solid border-2 border-black">Delete</th>
            </tr>
            @foreach($customer as $customers)
                <tr>
                    <td class="px-5 border-solid border-2 border-black">{{$customers->Name}}</td>
                    <td class="px-5 border-solid border-2 border-black">{{$customers->phoneNumber}}</td>
                    <td class="px-5 border-solid border-2 border-black">{{$customers->Address}}</td>
                    <td class="px-5 border-solid border-2 border-black">{{$customers->Age}}</td>
                    <td class="px-5 border-solid border-2 border-black"><a href="{{route('manager.customer.edit',['customer'=>$customers])}}">Edit</a> </td>
                    <td class="px-5 border-solid border-2 border-black">
                        <form action="{{route('manager.customer.destroy',['customer'=>$customers])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                </tr>
            @endforeach
        </table>
@endsection
