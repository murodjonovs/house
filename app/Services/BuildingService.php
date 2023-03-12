<?php

namespace App\Services;

use App\Models\Building;

class BuildingService extends BaseService
{

    private $floorService;
    public function __construct(FloorService $floorService)
    {
        $this->floorService = $floorService;
    }

    public function store($project_id, $paths)
    {
        foreach ($paths as $path) {
            Building::create([
                'project_id' => $project_id,
                'd' => $path['d']
            ]);
        }
        return back();
    }

    public function update($request, $id)
    {
        $request = $request->toArray();
        $building = Building::find($id);
        if (isset($request['photo'])) {
            $this->fileDelete(null, null, null, $building->photo);
            $request['photo'] = $this->photoSave($request['photo'], 'img/building');
        }
        if (isset($request['svg'])) {

            $this->floorService->destroy($building->id);

            $svg = $this->svgSave($request['svg'], 'svg\building');
            $this->floorService->store($building->id, $svg['paths']);

            $request['view_box'] = $svg['view_box'];
        }
        $building->update($request);
        return back();
    }

    public function destroy($project_id)
    {
        $buildings = Building::where('project_id', $project_id)->get();
        foreach ($buildings as $building) {

            $this->fileDelete(null, null, null, $building->photo);
            $building->delete();
        }
        return back();
    }
}
