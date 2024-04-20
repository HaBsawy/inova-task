<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use App\Http\Requests\PostRequest;
use App\Repository\Post\PostRepositoryInterface;

class PostController extends Controller
{

    /**
     * @var PostRepositoryInterface
     */
    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ResponseHelper::make($this->postRepository->getAll());
    }

    /**
     * Display a listing of the resource.
     */
    public function myPosts()
    {
        return ResponseHelper::make($this->postRepository->getCurrentUserPosts());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        return ResponseHelper::make($this->postRepository->create($request),
            'post created successfully', true, 201);
    }
}
