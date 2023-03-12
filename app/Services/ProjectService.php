<?php

namespace App\Services;


use App\Models\Project;

class ProjectService extends BaseService
{
    private $buildingService;
    public function __construct(BuildingService $buildingService)
    {
        $this->buildingService = $buildingService;
    }

    public function update($request, $id)
    {
        $request = $request->toArray();
        $project = Project::find($id);
        if (isset($request['photo'])){
            $this->fileDelete(null, null, null, $project->photo);
            $request['photo'] = $this->photoSave($request['photo'], 'img/project');
        }
        if (isset($request['svg']))
        {
        
            $this->buildingService->destroy($project->id);

            $svg = $this->svgSave($request['svg'], 'svg\project');
            $this->buildingService->store($project->id, $svg['paths']);

            $request['view_box'] = $svg['view_box'];
        }
        $project->update($request);
        return back();
    }
}
