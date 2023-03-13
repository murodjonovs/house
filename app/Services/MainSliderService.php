<?php

namespace App\Services;

use App\Models\MainSlider;
use App\Models\Plan;

class MainSliderService extends BaseService
{
    public function store($request)
    {
        $request = $request->toArray();
        if (!empty($request['photo']))
        {
            $request['photo'] = $this->photoSave($request['photo'], 'img/mainslider');
        }
        MainSlider::create($request);
        return redirect()->route('dashboard.mainslider.index');
    }

    public function update($request, $id)
    {
        $request = $request->toArray();
        if (!empty($request['photo']))
        {
            $this->fileDelete('MainSlider', $id, 'photo');
            $request['photo'] = $this->photoSave($request['photo'], 'img/mainslider');
        }
        MainSlider::find($id)->update($request);
        return redirect()->route('dashboard.mainslider.index');
    }

    public function destroy($id)
    {
        $this->fileDelete('MainSlider', $id, 'photo');
        MainSlider::find($id)->delete();
        return back();
    }
}
