<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request, Idea $idea)
    {
        $data = $request->validated();

        $idea->comments()->create([
            'user_id' => Auth::id(),
            'content' => $data['content'],
        ]);

        return to_route('ideas.show', $idea)->with('success', "Comment posted successfully");

    }
}
