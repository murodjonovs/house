<?php

namespace App\Services;

use App\Models\News;

class NewsService extends BaseService
{
    public function store($request)
    {
        $request = $request->toArray();
        if (!empty($request['photo']))
        {
            $request['photo'] = $this->photoSave($request['photo'], 'img/news');
        }
        News::create($request);
        return back();
    }

    public function update($request, $id)
    {
        $request = $request->toArray();
        if (!empty($request['photo']))
        {
            $this->fileDelete('News', $id);
            $request['photo'] = $this->photoSave($request['photo'], 'img/news');
        }
        News::find($id)->update($request);
        return back();
    }

    public function destroy($id)
    {
        $this->fileDelete('News', $id);
        News::find($id)->delete();
        return back();
    }
}
