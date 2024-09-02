<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $query = Idea::latest();

        //% Check if there is a search
        if (request()->has('search')) {
            request()->validate([
                'search' => 'required|string|min:1|max:255'
            ]);
            $search = request()->get('search', '');
            $query = $query->where('content', 'LIKE', "%{$search}%");
        }

        $ideas = $query->paginate(5);
        // Pass the search term to the pagination links
        $ideas->appends(['search' => request()->get('search', '')]);

        return view('dashboard', compact('ideas'));
    }
}
