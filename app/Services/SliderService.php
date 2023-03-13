<?php

namespace App\Services;

use App\Models\SecondSlider;
use App\Models\Slider;

class SliderService extends BaseService
{
    public function store($request)
    {
        $secondslider = new SecondSlider();
        if($request->file('photo')){
            $secondslider['photo'] = $this->photoSave($request->file('photo'), 'img/secondslider');
        }
        $secondslider->slider_number = $request->slider_number;
        $secondslider->save();
        return back();
    }

    public function update($request, $id)
    {
        $request = $request->toArray();
        if(isset($request['photo'])){
            $this->fileDelete('SecondSlider', $id, 'photo');
            $request['photo'] = $this->photoSave($request['photo'], 'img/secondslider');
        }
        SecondSlider::find($id)->update($request);
        return back();
    }

    public function destroy($id)
    {
        $this->fileDelete('SecondSlider', $id, 'photo');
        SecondSlider::find($id)->delete();
        return back();
    }
}
