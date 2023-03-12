<?php

namespace App\Services;

use App\Models\Floor;

class FloorService extends BaseService
{
    private $flatService;
    public function __construct(FlatService $flatService)
    {
        $this->flatService = $flatService;
    }

    public function store($building_id, $paths)
    {
        foreach($paths as $path)
        {
            Floor::create([
                'building_id' => $building_id,
                'd' => $path['d']
            ]);
        }
        return back();
    }

    public function update($request, $id)
    {
        // dd($request->all());
        $request = $request->toArray();
        $floor = Floor::find($id);
        if (isset($request['photo'])){
            $this->fileDelete(null, null, null, $floor->photo);
            $request['photo'] = $this->photoSave($request['photo'], 'img/floor');
        }

        if (isset($request['svg']))
        {
            $this->flatService->destroy($floor->id);
            
            $svg = $this->svgSave($request['svg'], 'svg\floor');
            $this->flatService->store($floor->id, $svg['paths']);
            
            $request['view_box'] = $svg['view_box'];
        }
        // dd('asd');
        $floor->update($request);
        return back();
    }

    public function destroy($building_id)
    {
        $floors = Floor::where('building_id', $building_id)->get();
        foreach($floors as $floor)
        {
            $this->fileDelete(null, null, null, $floor->photo);
            $this->flatService->destroy($floor->id);
            $floor->delete();
        }
        return back();
    }
}
