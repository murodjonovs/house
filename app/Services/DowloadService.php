<?php

namespace App\Services;

use App\Models\Dowload;
use Illuminate\Support\Str;

class DowloadService extends BaseService
{
    public function store($request)
    {
        // $request = $request->toArray();
        // if (!empty($request['photo']))
        // {
        //     $request['photo'] = $this->photoSave($request['photo'], 'img/dowload');
        // }
        // Dowload::create($request);
        // return back();
        $dowload = new Dowload();
        if(!empty($request->file('photo'))){
            $img_name = Str::random(10).'.'.$request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move(public_path('/img/dowload'), $img_name);
            $dowload->photo = '/img/dowload/'.$img_name;
        }
        $dowload->name_ru = $request->name_ru;
        $dowload->name_uz = $request->name_uz;
        $dowload->name_kr = $request->name_kr;
        $dowload->save();
        return back();
    }

    public function update($request, $id)
    {
        $dowload = Dowload::find($id);
        if(!empty($request->file('photo'))){
            if(is_file(public_path($dowload->photo))){
                unlink(public_path($dowload->photo));
            }
            $img_name = Str::random(10).'.'.$request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move(public_path('/img/dowload'), $img_name);
            $dowload->photo = '/img/dowload/'.$img_name;
        }
        $dowload->name_ru = $request->name_ru;
        $dowload->name_uz = $request->name_uz;
        $dowload->name_kr = $request->name_kr;
        $dowload->save();
        return back();
    }

    public function destroy($id)
    {
        $this->fileDelete('Dowload', $id, 'photo');
        Dowload::find($id)->delete();
        return back();
    }
}
