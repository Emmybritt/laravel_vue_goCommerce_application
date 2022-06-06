<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\CourseResource;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalCourse = DB::table('courses')->where('status','=','published')->orderBy('created_at', 'DESC')->paginate(20);
        return CourseResource::collection($totalCourse);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCourseRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function getTotalcourseCount() 
    {
        $courseCount = DB::table('courses')->where('status', '=', 'published')->count();
        $totalLessons = DB::table('courses')->where('status', '=', 'published')->sum('lessons');
        $hours = DB::table('courses')->where('status', '=', 'published')->sum('duration');

        return response([
            'courseCount' => $courseCount,
            'lessonsCounts' => $totalLessons,
            'hoursCount' => $hours,
        ]);
    }

    public function getCourseDetails(Request $request, $details) {

    }

    public function store(StoreCourseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCourseRequest  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
