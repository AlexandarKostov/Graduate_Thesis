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

        $exists = DB::table('course_user')
                        ->where('course_id', '=', $request->course_id)
                        ->where('user_id', '=', Auth::id())
                        ->get();

        if ($exists->count() > 0) {
            return response()->json('error-exists');
        }
        
        DB::table('course_user')->insert(['course_id' => $request->course_id, 'user_id' => Auth::id()]);
        
        return response()->json('success');
    }

    public function showCourses()
    {
        // dd(Auth::id());
        // daj gi site kursevi so eden najaven korisnik gi ima, llol

        $course_user = CourseUser::where('user_id', Auth::id())->get();

        $courses = Course::all();

        foreach ($course_user as $value) {
            foreach ($courses as $course) {
                if ($value->course_id == $course->id) {
                    $kursevi = Course::where('id', $value->course_id)->get();
                }
            }
            // if ($value->course_id == $courses->id) {
            //     echo 'da';
            // }
        }

        // $courses = Course::where('id', $course_user->course_id)->get();

        dd($kursevi);
        // $courses1 = Course::where('id', $available[0]->course_id)->get();
        // $courses2 = Course::where('id', $available[1]->course_id)->get();
        // // $courses3 = Course::where('id', $available[3]->course_id)->first();

        // return view('courses', compact('courses1', 'courses2'));
    }

    public function showCourse(Course $course)
    {
        return view('show', [
            'course' => $course,
        ]);
    }
}
