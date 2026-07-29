<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

// Route for CV download
Route::get('/cv/download', function () {
    $file = public_path('cv.pdf');
    if (file_exists($file)) {
        return response()->file($file, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="CV_ATS_RAFLY_MAULANA_ZULYZZAR.pdf"'
        ]);
    }
    abort(404, 'CV belum tersedia');
})->name('cv.download');
