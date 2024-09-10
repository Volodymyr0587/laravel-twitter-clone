<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $lang = $request->lang;

        if (!in_array($lang, ['en', 'uk'])) {

            abort(404);

        }

        session()->put('locale', $lang);

        return redirect()->back();
    }
}
