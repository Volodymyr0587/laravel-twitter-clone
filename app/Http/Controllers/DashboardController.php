<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = [
            [
                'name' => 'Alex',
                'age' => 45,
            ],
            [
                'name' => 'Dan',
                'age' => 51,
            ],
            [
                'name' => 'Jack',
                'age' => 87,
            ],
            [
                'name' => 'John',
                'age' => 17,
            ],
        ];

        return view('dashboard', compact('users'));
    }
}
