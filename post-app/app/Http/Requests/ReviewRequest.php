<?php

namespace App\Http\Requests;

use App\Models\Review;
use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return !Review::query()->where([
            ['user_id', $this->get('user_id')],
            ['post_id', $this->get('post_id')],
        ])->first();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id'   => 'required|exists:users,id',
            'post_id'   => 'required|exists:posts,id',
            'rate'      => 'required|in:1,2,3,4,5',
            'comment'   => 'required|between:3,255'
        ];
    }
}
