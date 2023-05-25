<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\late_payor;

class latePayorController extends Controller
{
    public function index()
    {
        $debtors= late_payor::all();
        $debtors = late_payor::paginate(10);
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
        late_payor::create([
            'name' => $request->name,
            'data_transaction' => $request->data_transaction,
            'username' => $request->username,
            'amount' => $request->amount,
        ]);

        return redirect()->route('debtors.index')->with('success','Added Successfully.');
    }

   
    public function show(late_payor $debtor)
    {
        return view('debtors.show',compact('debtor'));
    }

    
    public function edit(late_payor $debtor)
    {
        return view('debtors.edit',compact('debtor'));
    }

    
    public function update(Request $request, late_payor $debtor)
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
            'username' => $request->username,
            'amount' => $request->amount,
        ])->save();

        return redirect()->route('debtors.index')->with('success','Updated successfully');
    }

   
    public function destroy(late_payor $debtor)
    {
        $debtor->delete();
        return redirect()->route('debtor.index')->with('success','Deleted Successfully');
    }
}
