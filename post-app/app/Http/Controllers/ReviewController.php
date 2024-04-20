<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use App\Repository\Review\ReviewRepositoryInterface;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * @var ReviewRepositoryInterface
     */
    private $reviewRepository;

    public function __construct(ReviewRepositoryInterface $reviewRepository)
    {
        $this->reviewRepository = $reviewRepository;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReviewRequest $request)
    {
        return ResponseHelper::make($this->reviewRepository->create($request),
            'review created successfully', true, 201);
    }
}
