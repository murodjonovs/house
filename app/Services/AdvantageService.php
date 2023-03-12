<?php

namespace App\Services;

use App\Models\Plan;

class AdvantageService extends BaseService
{
    public function store($request)
    {
        $request = $request->toArray();
        if (!empty($request['icon']))
        {
            $request['icon'] = $this->photoSave($request['icon'], 'img/icon');
        }
        Plan::create($request);
        return back();
    }

    public function update($request, $id)
    {
        $request = $request->toArray();
        if (!empty($request['icon']))
        {
            $this->fileDelete('Advantage', $id, 'icon');
            $request['icon'] = $this->photoSave($request['icon'], 'img/icon');
        }
        Plan::find($id)->update($request);
        return back();
    }

    public function destroy($id)
    {
        $this->fileDelete('Advantage', $id);
        Plan::find($id)->delete();
        return back();
    }
}
