<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
    public function follow(User $user)
    {
        $follower = auth()->user();

        $follower->followings()->attach($user);

        return to_route('users.show', $user)->with('success', "You are now following $user->name");
    }

    public function unfollow(User $user)
    {
        $follower = auth()->user();

        $follower->followings()->detach($user);

        return to_route('users.show', $user)->with('success', "You are no longer following $user->name");
    }
}
