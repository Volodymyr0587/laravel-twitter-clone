<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $ideas = $user->ideas()->latest()->paginate(5);
        return view('users.show', compact('user', 'ideas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $ideas = $user->ideas()->paginate(5);

        return view('users.edit', compact('user', 'ideas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        if (auth()->id() !== $user->id) {
            abort(404);
        }

        $data = $request->validate([
            'name' => 'required|string|min:2|max:40',
            'bio' => 'nullable|string|min:2|max:255',
            'image' => 'nullable|image|mimes:png,jpg',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('profile', 'public');

            Storage::disk('public')->delete($user->image);
        }

        $user->update($data);

        return to_route('profile')->with('success', 'Profile was updated successfully');
    }

    public function profile()
    {
        return $this->show(auth()->user());
    }
}
