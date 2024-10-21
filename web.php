<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/language', function () {
    return view('language');  
});


Route::post('/set-language', function (Request $request) {
    $language = $request->input('language');
    $remember = $request->has('remember');

    
    if ($remember) {
        return redirect()->back()->withCookie(cookie()->forever('language', $language))
                                 ->with('message', 'Language has been saved successfully in cookies.');
    } else {
        return redirect()->back()->with('message', 'Language updated but not saved in cookies.');
    }
})->name('set.language');