<?php

namespace App\Repository\Post;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class PostRepository implements PostRepositoryInterface
{

    public function getAll()
    {
        // SELECT posts.*, AVG(reviews.rate) AS avg_rate FROM `posts` LEFT JOIN reviews ON posts.id = reviews.post_id ORDER BY avg_rate DESC
        return Post::query()->leftJoin('reviews', function ($join) {
            $join->on('posts.id', '=', 'reviews.post_id');
        })->orderBy('reviews.rate', 'DESC')->paginate();
    }

    public function getCurrentUserPosts()
    {
        return Post::query()->where('user_id', request('user_id'))
            ->paginate();
    }

    public function create(PostRequest $request)
    {
        return Post::query()->create([
            'user_id'   => $request->get('user_id'),
            'title'     => $request->get('title'),
            'body'      => $request->get('body'),
        ]);
    }
}
