<?php

namespace App\Http\Controllers;
use App\BankBook;
use App\BankInfo;
use Illuminate\Http\Request;

class BankTransactionController extends Controller
{
    public function index(){
        $table = BankBook::orderBy('bankBookID', 'DESC')->get();
        $bankinfo = BankInfo::orderBy('bankID', 'DESC')->get();
        return view('bank.banktran')->with(['table' => $table, 'bankinfo'=>$bankinfo]);
    }
    public function deposit(Request $request)
    {
        $table = new BankBook();

        $table->bankID = $request->bankID;
        $table->amountIN = $request->amountIN;
        $table->drCR = 'IN';
        $table->description = $request->description;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function withdraw(Request $request)
    {
        $table = new BankBook();

        $table->bankID = $request->bankID;
        $table->amountOut = $request->amountOut;
        $table->drCR = 'OUT';
        $table->description = $request->description;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
}
