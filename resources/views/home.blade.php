@extends('layouts.app')

@section('content')
<div>


    @foreach($medicine as $medicine)
        <div class="bg-amber-200 overflow-hidden shadow-sm sm:rounded-lg flex justify-between px-10 m-10 h-25">
            <div class="p-6 text-gray-900 flex align-baseline ">
                <div style="padding-left: 25px">
                    <h2 class="font-300 text-3xl py-3 ">{{$medicine->medicineName}}</h2>
                    <p class="font-300 text-2xl py-3">${{$medicine->medicinePrice}}</p>

                </div>

            </div>

            <div class="py-10">
                <a class="bg-amber-950 w-15 h-15 text-amber-50 m-10 p-3 rounded-lg" href="{{route('cashier.medicine.edit', ['medicine'=>$medicine])}}">Edit</a>
                <form action="{{route('cashier.medicine.destroy', ['medicine'=>$medicine])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input class="bg-amber-950 w-15 h-15 text-amber-50 m-10 p-3 rounded-lg" type="submit" value="Delete">
                </form>
            </div>
        </div>




@endforeach
</div>
@endsection
