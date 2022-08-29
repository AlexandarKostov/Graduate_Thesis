<?php

use App\Http\Controllers\CourseController;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [CourseController::class, 'index'])->name('courses.index');
Route::get('course/{course:slug}', [CourseController::class, 'show'])->name('courses.show');

Route::get('category/{category:slug}', function($slug) {
    return view('categories.index', [
        'categoriesPodcasts' => Category::where('slug', $slug)->with('podcasts')->get(),
        'categories' => Category::all(),
        'courses' => Course::all(),
    ]);
})->name('categories.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
