<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIdeaRequest;
use App\Http\Requests\UpdateIdeaRequest;
use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class IdeaController extends Controller
{
    public function show(Idea $idea)
    {
        return view('ideas.show', compact('idea'));
    }

    public function store(StoreIdeaRequest $request)
    {
        $data = $request->validated();

        auth()->user()->ideas()->create($data);

        return to_route('dashboard')->with('success', 'Idea was created successfully');
    }

    public function edit(Idea $idea)
    {
        Gate::authorize('update', $idea);

        $editing = true;

        return view('ideas.show', compact('idea', 'editing'));
    }

    public function update(UpdateIdeaRequest $request, Idea $idea)
    {
        Gate::authorize('update', $idea);

        $data = $request->validated();

        $idea->update($data);

        return to_route('ideas.show', $idea)->with('success', 'Idea was updated successfully');
    }

    public function destroy(Idea $idea)
    {
        Gate::authorize('delete', $idea);

        $idea->delete();

        return to_route('dashboard')->with('success', 'Idea was deleted successfully');
    }
}
