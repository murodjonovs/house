<?php
namespace App\Services;

use App\Models\Feedback;

class FeedbackService extends BaseService
{
    public function store($request)
    {
        Feedback::create($request->all());
        return back();
    }

    public function destroy($id)
    {
        $feedback = Feedback::find($id);
        $feedback->delete();
        return back();
    }
}