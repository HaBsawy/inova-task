<?php

namespace App\Repository\Review;

use App\Http\Requests\ReviewRequest;

interface ReviewRepositoryInterface
{
    public function create(ReviewRequest $request);
}
