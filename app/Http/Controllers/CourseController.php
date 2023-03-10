<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\CourseUser;
use App\Models\Podcast;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

    public function enroll(Request $request)
    {
        if (!Auth::check()) {
            return response()->json('error');
        }

        $exists = DB::table('course_users')
                        ->where('course_id', '=', $request->course_id)
                        ->where('user_id', '=', Auth::id())
                        ->get();

        if ($exists->count() > 0) {
            return response()->json('error-exists');
        }
        
        CourseUser::insert(['course_id' => $request->course_id, 'user_id' => Auth::id()]);
        
        return response()->json('success');
    }

    public function showCourses()
    {
        $data = CourseUser::with(['course'])
                ->whereRelation('user', 'user_id', '=', Auth::id())
                ->get();

        return view('courses', compact('data'));
    }

    public function showCourse(Course $course)
    {
        return view('show', [
            'course' => $course,
        ]);
    }
}
