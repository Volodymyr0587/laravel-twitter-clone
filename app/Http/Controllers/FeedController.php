<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = auth()->user();

        $followingIDs = $user->followings()->pluck('user_id');

        $query = Idea::whereIn('user_id', $followingIDs)->latest();

        $search = '';

        //% Check if there is a search
        if (request()->has('search')) {
            request()->validate([
                'search' => 'required|string|min:1|max:255'
            ]);
            $search = request()->get('search', '');
            $query = $query->where('content', 'LIKE', "%{$search}%");
        }

        $ideas = $query->paginate(5);

        return view('dashboard', compact('ideas', 'search'));
    }
}
