<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Building;
use App\Models\Project;
use App\Services\BuildingService;
use Illuminate\Http\Request;

class BuildingController extends BaseController
{

    public function show($building_id)
    {
        $building = Building::with('floors')->find($building_id);
        return view('front.buildings.index', compact('building'));
    }

}
