<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Building;
use App\Models\Floor;
use App\Services\FloorService;
use Illuminate\Http\Request;

class FloorController extends BaseController
{
    public function show($id)
    {
        $floor = Floor::with('flats')->find($id);
        $floors = Floor::where('building_id', $floor->building_id)->get();
        return view('front.flats.index', [
            'floor'=>$floor,
            'floors'=>$floors,
        ]);
    }

}
