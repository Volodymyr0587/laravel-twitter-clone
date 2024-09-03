<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function show(Idea $idea)
    {
        return view('ideas.show', compact('idea'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => 'required|string|min:2|max:1000',
        ]);

        auth()->user()->ideas()->create($data);

        return to_route('dashboard')->with('success', 'Idea was created successfully');
    }

    public function edit(Idea $idea)
    {
        if (auth()->id() !== $idea->user_id) {
            abort(404);
        }

        $editing = true;

        return view('ideas.show', compact('idea', 'editing'));
    }

    public function update(Request $request, Idea $idea)
    {
        if (auth()->id() !== $idea->user_id) {
            abort(404);
        }

        $data = $request->validate([
            'content' => 'required|string|min:2|max:1000',
        ]);

        $idea->update($data);

        return to_route('ideas.show', $idea)->with('success', 'Idea was updated successfully');
    }

    public function destroy(Idea $idea)
    {
        if (auth()->id() !== $idea->user_id) {
            abort(404);
        }
        $idea->delete();

        return to_route('dashboard')->with('success', 'Idea was deleted successfully');
    }
}
