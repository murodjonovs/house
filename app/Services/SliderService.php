<?php

namespace App\Services;

use App\Models\Slider;

class SliderService extends BaseService
{
    public function store($request)
    {
        $request = $request->toArray();
        if (!empty($request['photo']))
        {
            $request['photo'] = $this->photoSave($request['photo'], 'img/plan');
        }
        Slider::create($request);
        return back();
    }

    public function update($request, $id)
    {
        $request = $request->toArray();
        if (!empty($request['photo']))
        {
            $this->fileDelete('Slider', $id);
            $request['photo'] = $this->photoSave($request['photo'], 'img/plan');
        }
        Slider::find($id)->update($request);
        return back();
    }

    public function destroy($id)
    {
        $this->fileDelete('Slider', $id);
        Slider::find($id)->delete();
        return back();
    }
}
