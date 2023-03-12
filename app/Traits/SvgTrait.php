<?php

namespace App\Traits;

use App\Models\Path;
use App\Models\Svg;
use Illuminate\Support\Str;

trait SvgTrait
{
    private function svgUpload($svg, $directory)
    {
        $svg_name = Str::random(10);
        $svg->move(public_path() . '/'. $directory .'/', $svg_name .  '.' . $svg->getClientOriginalExtension());
        $svg = $directory . '/' . $svg_name .  '.' . $svg->getClientOriginalExtension();
        return $svg;
    }

    protected function svgSave($svg, $directory)
    {
        $svg_paths = $this->svgUpload($svg, $directory);
        $paths = simplexml_load_file($svg_paths);
        $view_box = $paths->attributes()->viewBox;
        unlink(public_path() . '/' . $svg_paths);
        return ['view_box' => $view_box, 'paths' => $paths];
    }


}
