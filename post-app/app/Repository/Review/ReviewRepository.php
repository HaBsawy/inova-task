<?php

namespace App\Repository\Review;

use App\Http\Requests\ReviewRequest;
use App\Models\Review;

class ReviewRepository implements ReviewRepositoryInterface
{

    public function create(ReviewRequest $request)
    {
        return Review::query()->create([
            'user_id'   => $request->get('user_id'),
            'post_id'   => $request->get('post_id'),
            'rate'      => $request->get('rate'),
            'comment'   => $request->get('comment'),
        ]);
    }
}
