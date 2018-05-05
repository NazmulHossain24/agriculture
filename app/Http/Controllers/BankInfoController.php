<?php

namespace App\Http\Controllers;
use App\BankInfo;
use Illuminate\Http\Request;

class BankInfoController extends Controller
{
    public function index(){
        $table = BankInfo::orderBy('bankID', 'DESC')->get();
        return view('bank.bankInfo')->with(['table' => $table]);
    }
    public function save(Request $request){
        $table = new BankInfo();
        $table->name = $request->name;
        $table->accountNumber = $request->accountNumber;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function edit(Request $request)
    {
        $table= BankInfo::find($request->id);
        $table->name = $request->name;
        $table->accountNumber = $request->accountNumber;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }

    public function del($id){
        $table = BankInfo::find($id);
        $table->delete();

        return redirect()->back()->with(config('custom.del'));
    }
}
