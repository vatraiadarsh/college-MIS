@extends('adminlte::page')
@section('title','Edit Courses')
@section('content_header')
<h1>
    Edit Courses
    <small>All Courses</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Edit Courses</li>
  </ol>

@stop


@section('content')

{!!Form::open(['url'=>'admin/courses/'.$course->id,'method'=>'PUT',])!!}

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {{Form::Label('Course Name')}}
            {{Form::text('course_name',$course->course_name,['class'=>'form-control'])}}
            @if ($errors->first('course_name'))
            <div class="label label-danger">
                {{$errors->first('course_name')}}
            </div>
            @endif
        </div>
    </div>
</div>

    <button type="submit" class="btn btn-success">Save</button>
    <a class="btn btn-danger" href="{{url('admin/courses')}}">Back</a>
{!!Form::close()!!}

@stop

