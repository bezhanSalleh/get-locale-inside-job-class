<?php

namespace App\Http\Controllers;

class SwitchLanguageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($locale)
    {
        session()->put('locale', $locale);
        session()->save();
        return redirect()->back();
    }
}
