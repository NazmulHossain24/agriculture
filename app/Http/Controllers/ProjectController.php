<?php

namespace App\Http\Controllers;

use App\Projects;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $table = Projects::orderBy('projectsID', 'DESC')->get();
        return view('project.projects')->with(['table' => $table]);
    }
    public function save(Request $request){
        $table = new Projects();
        $table->name = $request->name;
        $table->description = $request->description;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function edit(Request $request)
    {
        $table= Projects::find($request->id);
        $table->name = $request->name;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }

    public function del($id){
        $table = Projects::find($id);
        $table->delete();

        return redirect()->back()->with(config('custom.del'));
    }
}
