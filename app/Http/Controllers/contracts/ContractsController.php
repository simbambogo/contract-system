<?php

namespace App\Http\Controllers\contracts;

use App\Http\Controllers\Controller;
use App\Models\Contract\Contract;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Ramsey\Uuid\Rfc4122\Validator;

class ContractsController extends Controller
{
    //
    public function index()
    {
        $currentTime = Carbon::now();
        $contracts = Contract::all();
        return view('contract.contract-list', compact('contracts', 'currentTime'));
    }

    //create contract
    public function create()
    {
        return view('contract.contract-create');
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:contracts',
            'startd' => 'required',
            'endd' => 'required',
            'document' => 'required|mimes:jepg,jpg,png,gif,pdf|max:2048'
        ]);
        $filename = time() . '.' . $request->document->extension();
        $request->document->move(public_path('uploads'), $filename);
        $contract = new Contract();
        $contract->name = $request->name;
        $contract->startd = $request->startd;
        $contract->endd = $request->endd;
        $start = Carbon::parse($request->startd);
        $end = Carbon::parse($request->endd);
        $contract->duration = $start->diffInMonths($end);
        $contract->document = $request->document;
        $contract->save();
        return redirect()->route('contract')->with('success', 'contract saved');
    }
    public function destroy($id)
    {
        $contract=Contract::find($id);
        if(!$contract) return back()->with('error','contract not found');
        $contract->delete();
        return redirect()->route('contract')->with('success','Contract successfully deleted');
    }
}
