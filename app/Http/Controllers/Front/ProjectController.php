<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\BaseController;
use App\Models\Project;
use App\Services\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends BaseController 
{

    public function index()
    {
        $project = Project::with('buildings')->find(1);
        return view('front.projects.index', ['project'=>$project]);
    }

}
