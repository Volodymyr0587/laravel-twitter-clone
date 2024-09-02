<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $ideas = Idea::latest();

        //% Check if there is a search
        if (request()->has('search')) {
            request()->validate([
                'search' => 'required|string|min:1|max:255'
            ]);
            $ideas = $ideas->where('content', 'LIKE', '%' . request()->get('search', '') . '%');
        }


        return view('dashboard', ['ideas' => $ideas->paginate(5)]);
    }
}
