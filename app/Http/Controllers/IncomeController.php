<?php

namespace App\Http\Controllers;
use App\IncExp;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index(){
        $table =IncExp::where('incExpType', 'income')->orderBy('incexpID', 'DESC')->get();
        return view('incExp.income')->with([ 'table'=>$table]);
    }

    public function save(Request $request){
        $table = new IncExp();
        $table->name = $request->name;
        $table->incExpType = 'income';
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
