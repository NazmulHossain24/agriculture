<?php

namespace App\Http\Controllers;
use App\IncExp;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index(){
        $table =IncExp::where('incExpType', 'expense')->orderBy('incexpID', 'DESC')->get();
        return view('incExp.expense')->with([ 'table'=>$table]);
    }


    public function save(Request $request){
        $table = new IncExp();
        $table->name = $request->name;
        $table->incExpType = 'expense';
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }

    public function edit(Request $request)
    {
        $table= IncExp::find($request->id);
        $table->name = $request->name;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }

    public function del($id){
        $table = IncExp::find($id);
        $table->delete();

        return redirect()->back()->with(config('custom.del'));
    }
}
