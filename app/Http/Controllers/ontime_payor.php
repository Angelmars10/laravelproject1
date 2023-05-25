<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\on_time_payor;

class ontime_payor extends Controller
{
    public function index()
    {
        $debtors= on_time_payor::all();
        $debtors = on_time_payor::paginate(10);
        return view('debtors.index', compact('debtors'));
    }

    public function create()
    {
        return view('debtors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'data_transaction' => 'required',
            'amount' => 'required',
            'remarks' => 'required',
        ]);
        
        //Student::create($request->post());
        on_time_payor::create([
            'name' => $request->name,
            'data_transaction' => $request->data_transaction,
            'amount' => $request->amount,
            'remarks' => $request->remarks,
        ]);

        return redirect()->route('debtors.index')->with('success','Added Successfully.');
    }

   
    public function show(on_time_payor $debtor)
    {
        return view('debtors.show',compact('debtor'));
    }

    
    public function edit(on_time_payor$debtor)
    {
        return view('debtors.edit',compact('debtor'));
    }

    
    public function update(Request $request, on_time_payor $debtor)
    {
        $request->validate([
            'name' => 'required',
            'data_transaction' => 'required',
            'amount' => 'required',
            'remarks' => 'required',
        ]);
        
        //$student->fill($request->post())->save();

        $debtor->fill([
            'name' => $request->name,
            'data_transaction' => $request->data_transaction,
            'amount' => $request->amount,
            'remarks' => $request->remarks,
        ])->save();

        return redirect()->route('debtors.index')->with('success','Updated successfully');
    }

   
    public function destroy(on_time_payor $debtor)
    {
        $debtor->delete();
        return redirect()->route('debtors.index')->with('success','Deleted Successfully');
    }
}
