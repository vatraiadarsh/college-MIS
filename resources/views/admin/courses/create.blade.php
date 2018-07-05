@extends('adminlte::page')
@yield('title','create')
@section('content_header')
<h1>
    Add Courses
    <small>All Courses</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Add Courses</li>
  </ol>
@stop

@section('content')

{!!Form::open(['url'=>'admin/courses','method'=>'post'])!!}
<div class="form-group">
    {{Form::Label('Add Courses')}}
    {{Form::text('course_name','',['class'=>'form-control'])}}
   @if ($errors->first('course_name'))
    <div class="label label-danger">
        {{$errors->first('course_name')}}
    </div>
    @endif
</div>


   <div class="form-check">
    <input class="form-check-input" type="checkbox" name="status">
    <label class="form-check-label" for="defaultCheck1">Check this out to make it active
    </label>


</div>


<button type="submit" class="btn btn-success">Save</button>

    <button type="submit" name="ctn" class="btn btn-primary">Save & Continue
        </button>

</a>



<a class="btn btn-danger" href="{{url('admin/courses')}}">Back</a>

{!!Form::close()!!}
@stop

