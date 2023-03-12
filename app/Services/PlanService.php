<?php

namespace App\Services;

use App\Models\Plan;

class PlanService extends BaseService
{
    public function store($request)
    {
        $request = $request->toArray();
        if (!empty($request['photo']))
        {
            $request['photo'] = $this->photoSave($request['photo'], 'img/plan');
        }
        Plan::create($request);
        return back();
    }

    public function update($request, $id)
    {
        $request = $request->toArray();
        if (!empty($request['photo']))
        {
            $this->fileDelete('Plan', $id);
            $request['photo'] = $this->photoSave($request['photo'], 'img/plan');
        }
        Plan::find($id)->update($request);
        return back();
    }

    public function destroy($id)
    {
        $this->fileDelete('Plan', $id);
        Plan::find($id)->delete();
        return back();
    }
}
