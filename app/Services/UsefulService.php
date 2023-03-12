<?php

namespace App\Services;

use App\Models\Useful;

class UsefulService extends BaseService
{
    public function store($request)
    {
        $request = $request->toArray();
        if (!empty($request['photo']))
        {
            $request['photo'] = $this->photoSave($request['photo'], 'img/usefuls');
        }
        Useful::create($request);
        return back();
    }

    public function update($request, $id)
    {
        $request = $request->toArray();
        if (!empty($request['photo']))
        {
            $this->fileDelete('Useful', $id);
            $request['photo'] = $this->photoSave($request['photo'], 'img/usefuls');
        }
        Useful::find($id)->update($request);
        return back();
    }

    public function destroy($id)
    {
        $this->fileDelete('Useful', $id);
        Useful::find($id)->delete();
        return back();
    }
}
