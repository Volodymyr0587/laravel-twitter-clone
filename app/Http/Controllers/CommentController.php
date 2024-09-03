<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, Idea $idea)
    {
        $data = $request->validate([
            'content' => 'required|string|min:2|max:1000',
        ]);

        $idea->comments()->create([
            'user_id' => Auth::id(),
            'content' => $data['content'],
        ]);

        return to_route('ideas.show', $idea)->with('success', "Comment posted successfully");

    }
}
