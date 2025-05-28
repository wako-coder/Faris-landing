<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;

Route::get('/', function () {

    $analytics=Analytics::fetchVisitorsAndPageViews(Period::days(3));

    $pageperview = optional($analytics->first())['screenPageViews'] ?? 8;
    return view('welcome', compact('pageperview'));
});

Auth::routes();






// Route::get('/test-analytics', function () {
//     $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));

//     return $analyticsData;
// });



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/vacancy', function () {
    return view('vacancy');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blogs', function () {
    return view('blog.index');
});
Route::get('/blogsingle', function () {
    return view('blogs.blogsingle');
});
Route::get('/software', function () {
    return view('ourservice.softwareservice');
});
Route::get('/knowledge', function () {
    return view('ourservice.knowledge');
});
Route::get('/buisness', function () {
    return view('ourservice.buisness');
});
Route::get('/research', function () {
    return view('ourservice.research');
});



    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/showblogs', [BlogController::class, 'showblogs'])->name('blogs.showblogs')->middleware('auth');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create')->middleware('auth');
    Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');
    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit')->middleware('auth');
    Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update')->middleware('auth');
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy')->middleware('auth');

