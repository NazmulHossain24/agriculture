<?php

namespace App\Http\Controllers;

use App\CashBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CashBookController extends Controller
{
    public function index(){
        $table = CashBook::select(DB::raw('DATE(created_at) as date'),
            DB::raw('SUM(amountOut) as dr'),
            DB::raw('SUM(amountIN) as cr'))->groupBy('date')->get();
        return view('cashbook.cashbook')->with(['table' => $table]);
    }
    public function save_IN(Request $request)
        {
            $table = new CashBook();

            $table->amountIN = $request->amount;
            $table->drCR = 'IN';
            $table->save();

        return redirect()->back()->with(config('custom.save'));
        }
    public function save_OUT(Request $request)
    {
        $table = new CashBook();

        $table->amountOut = $request->amount;
        $table->drCR = 'OUT';
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
}
