<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view("welcome",compact('projects'));
    }

    public function project($id){
        $project = Project::findOrFail($id);
        return view("project",compact("project"));
    }

}
