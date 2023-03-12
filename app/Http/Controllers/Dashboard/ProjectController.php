<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Project;
use App\Services\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends BaseController 
{
    private $projectService;
    public function __construct(ProjectService $projectService)
    {
        parent::__construct();
        $this->projectService = $projectService;
    }

    public function index()
    {
        $project = Project::find(1);
        return view('dashboard.projects.index', ['project'=>$project]);
    }

    public function update(Request $request, $id)
    {
        return $this->projectService->update($request, $id);
    }

}
