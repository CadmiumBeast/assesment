<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customer.view', ['customers' => $customers]);

    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'Name' => ['required'],
            'phoneNumber' => ['required'],
            'Age' => ['required', 'integer'],
            'Address' => ['required'],
        ]);
        Customer::create($data);
        return redirect()->route('owner.home');
    }

    public function show(Customer $customer)
    {
        return $customer;
    }
    public function edit(Customer $customer)
    {
        return view('customer.edit',['customer'=>$customer]);
    }
    public function update(Request $request, Customer $customer)
    {

        $data = $request->validate([
            'Name' => ['required'],
            'phoneNumber' => ['required'],
            'Age' => ['required', 'integer'],
            'Address' => ['required'],
        ]);

        $customer->update($data);

        return redirect()->route(auth()->user()->type . '.home');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customer.index');
    }
}
