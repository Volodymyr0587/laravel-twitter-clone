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

        //% Get the IDs of users that the authenticated user is following
        $followingIDs = $user->followings()->pluck('user_id');

        //% Validate the search input
        $request->validate([
            'search' => 'nullable|string|min:1|max:255'
        ]);

        //% Retrieve the search query from the request
        $search = $request->input('search', '');

        //% Query the ideas of the followed users and apply the search scope
        $ideas = Idea::whereIn('user_id', $followingIDs)
            ->latest()
            ->search($search)  //% Use the scopeSearch here
            ->paginate(2)
            ->appends(['search' => $search]);  //% Persist search in pagination links

        return view('dashboard', compact('ideas', 'search'));
    }
}
