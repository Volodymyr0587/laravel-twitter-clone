<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $idea = new Idea([
            'content' => 'Hello Artisans!',
        ]);

        $idea->save();

        $ideas = Idea::latest()->get();

        return view('dashboard', compact('ideas'));
    }
}
