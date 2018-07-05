<?php

namespace App\Http\Controllers\Admin;

use App\AdminCourse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.courses.index',[
            'courses'=>AdminCourse::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course=new AdminCourse();
        $course->course_name=$request->input('course_name');
        $course->status=$request->has('status');
        $course->save();
        if($request->has('ctn')){
            return redirect('admin/courses/create');
        }
        return redirect('admin/courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdminCourse  $adminCourse
     * @return \Illuminate\Http\Response
     */
    public function show(AdminCourse $adminCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdminCourse  $adminCourse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course=AdminCourse::findOrFail($id);
        return view('admin.courses.edit',[
            'course'=>$course
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminCourse  $adminCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminCourse $adminCourse)
    {

        $adminCourse->course_name=$request->input('course_name');
        $adminCourse->status=$request->has('status');
        $adminCourse->save();
        return redirect('admin/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminCourse  $adminCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course=AdminCourse::find($id);
        $course->delete();
        return redirect('admin/courses');
    }
}
