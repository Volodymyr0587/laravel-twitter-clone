<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => 'required|string|min:2|max:1000',
        ]);

        Idea::create($data);

        return to_route('dashboard')->with('message', 'Idea was created successfully');
    }
}
