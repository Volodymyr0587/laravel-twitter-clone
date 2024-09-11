<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //% Validate the search input if present
        request()->validate([
            'search' => 'nullable|string|min:1|max:255'
        ]);

        $search = request('search', '');

        $ideas = Idea::latest()
            ->when($search, function ($query, $search): void {
                $query->search($search);
            })
            ->paginate(5)
            ->appends(['search' => $search]);

        return view('dashboard', compact('ideas', 'search'));
    }
}
