<?php

namespace App\Http\Controllers;
use App\IncExpTransaction;
use App\CashBook;
use App\Projects;
use App\IncExp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpenseTransactionController extends Controller
{
    public function index(){
        $projects = Projects::orderBy('projectsID', 'DESC')->get();
        $inexp = IncExp::where('incExpType', 'expense')->orderBy('incexpID', 'DESC')->get();
        $table = IncExpTransaction::where('drCR', 'OUT')->orderBy('incexpTransacID', 'DESC')->get();
        return view('incExp.expensetransaction')->with(['table' => $table, 'projects'=>$projects,'inexp'=>$inexp]);
    }
    public function save(Request $request)
    {
        DB::beginTransaction();
        try {

        $table = new IncExpTransaction();

        $table->projectsID = $request->projectsID;
        $table->incexpID = $request->incexpID;
        $table->amountOut = $request->amount;
        $table->drCR = 'OUT';
        $table->description = $request->description;
        $table->save();

        if($request->amount > 0) {
            $cashbook = new CashBook();
            $cashbook->amountOut = $request->amount;
            $cashbook->drCR = 'OUT';
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
        $table->amountOut = $request->amount;
        $table->description = $request->description;
        $table->save();

            $parms = '%incexpTransacID%'.$request->id.'%';
            CashBook::where('drCR', 'OUT')->where('description', 'like', $parms)->update([
                'amountOut' => $request->amount
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
            CashBook::where('drCR', 'OUT')->where('description', 'like', $parms)->delete();

            DB::commit();
        } catch (\Throwable $e) {
            DB::rollback();
            throw $e;
        }

        return redirect()->back()->with(config('custom.del'));
    }

}
