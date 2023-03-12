<?php

namespace App\Services;

use App\Models\Flat;
use Illuminate\Support\Str;


class FlatService extends BaseService
{
    public function store($floor_id, $paths)
    {
        foreach($paths as $path)
        {
            Flat::create([
                'floor_id' => $floor_id,
                'd' => $path['d']
            ]);
        }
        return back();
    }

        public function update($request, $id)
        {
            
            // dd(Str::slug($request->name_ru) . '-' . Str::random(5));
            $request = $request->toArray();
            $flat = Flat::find($id);
            if (isset($request['photo'])){
                $this->fileDelete(null, null, null, $flat->photo);
                $request['photo'] = $this->photoSave($request['photo'], 'img/flat');
            }
            if(!isset($request['rooms'])){
                $request['rooms'] = [];
            }

            $flat->update($request);
            return back();
        }

        public function destroy($floor_id)
        {
            $flats = Flat::where('floor_id', $floor_id)->get();
            foreach($flats as $flat)
            {
                $this->fileDelete(null, null, null, $flat->photo);
                $flat->delete();
            }
            return back();
        }
}
