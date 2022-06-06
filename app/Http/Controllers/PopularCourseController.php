<?php

namespace App\Http\Controllers;

use App\Models\PopularCourse;
use App\Http\Requests\StorePopularCourseRequest;
use App\Http\Requests\UpdatePopularCourseRequest;
use Illuminate\Support\Facades\DB;

class PopularCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popularcourse = DB::table('popular_courses')->orderBy('id', 'DESC')->where('status', '=', 'published')->get();
        return $popularcourse;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePopularCourseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePopularCourseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PopularCourse  $popularCourse
     * @return \Illuminate\Http\Response
     */
    public function show(PopularCourse $popularCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PopularCourse  $popularCourse
     * @return \Illuminate\Http\Response
     */
    public function edit(PopularCourse $popularCourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePopularCourseRequest  $request
     * @param  \App\Models\PopularCourse  $popularCourse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePopularCourseRequest $request, PopularCourse $popularCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PopularCourse  $popularCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(PopularCourse $popularCourse)
    {
        //
    }
}
