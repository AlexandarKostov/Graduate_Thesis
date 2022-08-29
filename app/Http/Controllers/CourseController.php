<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('courses.index', [
            'courses' => Course::all(),
            'podcasts' => Podcast::all(),
            'categories' => Category::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        if (View::exists("courses.{$course->slug}")) {
            return view("courses.{$course->slug}", [
                'course' => $course,
                'courses' => Course::all(),
                'podcasts' => Podcast::all(),
                'categories' => Category::all()
            ]);
        }
    }
}
