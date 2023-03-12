<?php

namespace App\Services;

use App\Models\About;
use App\Models\Advantage;
use App\Models\News;
use Illuminate\Support\Str;


class AboutService extends BaseService
{
    public function update($request)
    {
        $request = $request->toArray();
        if (!empty($request['photo1']))
        {
            $this->fileDelete('About', 1, 'photo1');
            $request['photo1'] = $this->photoSave($request['photo1'], 'img/about');
        }
        if (!empty($request['photo2']))
        {
            $this->fileDelete('About', 1, 'photo2');
            $request['photo2'] = $this->photoSave($request['photo2'], 'img/about');
        }
        About::find(1)->update($request);
        return back();
    }

    public function iconstore($request)
    {
        // dd($request->all());
        $advantage = new Advantage();
        if(!empty($request->file('icon'))){
            $img_name = Str::random(10).'.'.$request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->move(public_path('/img/advantage'), $img_name);
            $advantage->icon = '/img/advantage/'.$img_name;
        }
        $advantage->statistic_ru = $request->statistic_ru;
        $advantage->statistic_uz = $request->statistic_uz;
        $advantage->statistic_en = $request->statistic_en;
        $advantage->name_ru = $request->name_ru;
        $advantage->name_uz = $request->name_uz;
        $advantage->name_en = $request->name_en;
        $advantage->save();
        return redirect()->back();
    }

    public function iconupdate($request, $id)
    {
        $advantage = Advantage::find($id);
        if(!empty($request->file('icon'))){
            if(is_file(public_path($advantage->icon))){
                unlink(public_path($advantage->icon));
            }
            $img_name = Str::random(10).'.'.$request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->move(public_path('/img/advantage'), $img_name);
            $advantage->icon = '/img/advantage/'.$img_name;
        }
        $advantage->statistic_ru = $request->statistic_ru;
        $advantage->statistic_uz = $request->statistic_uz;
        $advantage->statistic_en = $request->statistic_en;
        $advantage->name_ru = $request->name_ru;
        $advantage->name_uz = $request->name_uz;
        $advantage->name_en = $request->name_en;
        $advantage->save();
        return redirect()->back();
    }

    public function icondestroy($id)
    {
        $advantage = Advantage::find($id);
        if(is_file(public_path($advantage->icon))){
            unlink(public_path($advantage->icon));
        }
        $advantage->delete();
        return back();
    }
}
