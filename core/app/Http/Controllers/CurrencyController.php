<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index()
    {
        $data['pageTitle'] = "Currency Settings";
        $data['allCurrency'] = Currency::latest()->get();
        return view('admin.currency.index')->with($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'currency' => 'required|unique:currencies,currency',
            'rate' => 'required',
        ]);

        $currency = new Currency();
        $currency->currency = $request->currency;
        $currency->rate = $request->rate;
        $currency->save();

        return back()->with('success','Currency Added Successfully');
    }

    public function update(Request $request)
    {
        $currency = Currency::findOrFail($request->id);

        $request->validate([
            'currency' => 'required|unique:currencies,currency,'.$currency->id,
            'rate' => 'required',
        ]);

        $currency->update([
            'currency'=> $request->currency,
            'rate' => $request->rate
        ]);

        return back()->with('success','Currency Updated Successfully');
    }

    public function delete(Request $request)
    {
        $currency = Currency::findOrFail($request->id);
        $currency->delete();

        return back()->with('success','Currency Deleted Successfully');
    }
}
