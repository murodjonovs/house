<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Flat;
use App\Models\Floor;
use App\Services\FlatService;
use Illuminate\Http\Request;

class FlatController extends BaseController
{
    public function index($floor_id)
    {
        $floors = Floor::with('flats')->find($floor_id);
        return view('dashboard.flats.index', [
            'floors'=>$floors
        ]);
    }

    public function changeroom($count)
    {
        $flats = Flat::where('room_count', $count)->get();
        return view('front.flats.changeroom', [
            'flats'=>$flats
        ]);
    }


}
