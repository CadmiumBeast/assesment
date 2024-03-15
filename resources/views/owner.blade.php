@extends('layouts.app')
@section('content')
<h2>Medicine Controls</h2>
<div>
    <a href="{{route('medicine.create')}}" class="btn btn-primary mx-5">Add Medicine</a>
    <a href="{{route('medicine.index')}}" class="btn btn-primary mx-5">View Medicine</a>
</div>
<h2>Customer Controls</h2>
<div>
    <a href="{{route('customer.create')}}" class="btn btn-primary mx-5">Add Customer</a>
    <a href="{{route('customer.index')}}" class="btn btn-primary mx-5">View Customer</a>
</div>
@endsection
