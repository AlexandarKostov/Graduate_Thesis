<?php

use App\Http\Controllers\CourseController;
use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
Route::post('course/enroll', [CourseController::class, 'enroll'])->name('courses.enroll');
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

Route::get('/dashboard/courses', [CourseController::class, 'showCourses'])->middleware(['auth'])->name('dashboard.courses');

Route::get('/dashboard/course/{course:slug}', [CourseController::class, 'showCourse'])->name('dashboard.courses.show');

require __DIR__.'/auth.php';
