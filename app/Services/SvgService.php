<?php

namespace App\Services;

use App\Models\Building;
use App\Models\Path;
use App\Models\Svg;

class SvgService extends BaseService
{
    private $planService;
    public function __construct(PlanService $planService)
    {
        $this->planService = $planService;
    }

    public function destroy($project_id)
    {
        $svg = Svg::with(['paths.building.plans'])->where('project_id', $project_id)->first();
        foreach ($svg->paths as $path)
        {
            if(!empty($path->building->plans))
            {
                foreach ($path->building->plans as $plan)
                {
                    $this->planService->destroy($plan->id);
                }
            }
            if(!empty($path->building))
            {
                Building::find($path->building->id)->delete();
            }
            Path::find($path->id)->delete();
        }
        $svg->delete();
    }
}
