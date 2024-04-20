<?php

namespace App\Repository\Post;

use App\Http\Requests\PostRequest;

interface PostRepositoryInterface
{
    public function getAll();
    public function getCurrentUserPosts();
    public function create(PostRequest $request);
}
