<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Building;
use App\Models\Project;
use App\Services\BuildingService;
use Illuminate\Http\Request;

class BuildingController extends BaseController
{

    private 
    $buildingService;
    public function __construct(BuildingService $buildingService)
    {
        parent::__construct();
        $this->buildingService = $buildingService;
    }

    public function index($project_id)
    {
        $project = Project::with('buildings')->find($project_id);
        return view('dashboard.buildings.index', compact('project'));
    }

    
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $building = Building::with('floors')->find($id);
        return view('dashboard.buildings.edit', [
            'building'=>$building
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->buildingService->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
