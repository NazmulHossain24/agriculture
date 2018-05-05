<?php

namespace App\Http\Controllers;
use App\CashBook;
use App\IncExpTransaction;
use App\Projects;
use App\IncExp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IncomeTransactionController extends Controller
{
    public function index(){
        $projects = Projects::orderBy('projectsID', 'DESC')->get();
        $inexp = IncExp::where('incExpType', 'income')->orderBy('incexpID', 'DESC')->get();
        $table = IncExpTransaction::where('drCR', 'IN')->orderBy('incexpTransacID', 'DESC')->get();
        return view('incExp.incometransaction')->with(['table' => $table, 'projects'=>$projects,'inexp'=>$inexp]);
    }
    public function save(Request $request)
    {
        DB::beginTransaction();
        try {

        $table = new IncExpTransaction();

        $table->projectsID = $request->projectsID;
        $table->incexpID = $request->incexpID;
        $table->amountIN = $request->amountIN;
        $table->drCR = 'IN';
        $table->description = $request->description;
        $table->save();

        if($request->amountIN > 0){
            $cashbook = new CashBook();
            $cashbook->amountIN = $request->amountIN;
            $cashbook->drCR = 'IN';
            $cashbook->description = serialize(['incexpID' => $request->incexpID, 'projectsID' => $request->projectsID, 'incexpTransacID' => $table->incexpTransacID]);
            $cashbook->save();
        }

            DB::commit();
        } catch (\Throwable $e) {
            DB::rollback();
            throw $e;
        }

        return redirect()->back()->with(config('custom.save'));
    }

    public function edit(Request $request)
    {
        DB::beginTransaction();
        try {

        $table= IncExpTransaction::find($request->id);
        $table->projectsID = $request->projectsID;
        $table->incexpID = $request->incexpID;
        $table->amountIN = $request->amountIN;
        $table->description = $request->description;
        $table->save();

        $parms = '%incexpTransacID%'.$request->id.'%';
        CashBook::where('drCR', 'IN')->where('description', 'like', $parms)->update([
            'amountIN' => $request->amountIN
        ]);


            DB::commit();
        } catch (\Throwable $e) {
            DB::rollback();
            throw $e;
        }



        return redirect()->back()->with(config('custom.save'));
    }
    public function del($id){
        DB::beginTransaction();
        try {

        $table = IncExpTransaction::find($id);
        $table->delete();

        $parms = '%incexpTransacID%'.$id.'%';
        CashBook::where('drCR', 'IN')->where('description', 'like', $parms)->delete();

        DB::commit();
            } catch (\Throwable $e) {
        DB::rollback();
        throw $e;
        }

        return redirect()->back()->with(config('custom.del'));
    }
}
