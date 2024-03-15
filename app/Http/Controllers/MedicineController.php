<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index()
    {
        $medicines = Medicine::all();

        return view('medicine.view', ['medicines' => $medicines]);
    }

    public function create()
    {
        return view('medicine.create');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'medicineName' => ['required'],
            'medicinePrice' => ['nullable'],
        ]);

        Medicine::create([
            'medicineName' => $data['medicineName'],
            'medicinePrice' => $data['medicinePrice'],
        ]);

        return redirect()->route('owner.home');
    }

    public function show(Medicine $medicine)
    {
        return $medicine;
    }

    public function update(Request $request, Medicine $medicine)
    {
        $data = $request->validate([
            'medicineName' => ['required'],
            'medicinePrice' => ['nullable', 'numeric'],
        ]);

        $medicine->update($data);

        return redirect()->route(auth()->user()->type . '.home');
    }

    public function edit(Medicine $medicine)
    {
        return view('medicine.edit',['medicine'=>$medicine]);
    }

    public function cashierDestroy(Medicine $medicine)
    {
        $medicine->delete();

        return redirect()->route('cashier.home');
    }
    public function destroy(Medicine $medicine)
    {
        $medicine->delete();

        return redirect()->route('medicine.index');
    }
}
