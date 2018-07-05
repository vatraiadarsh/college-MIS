@extends('adminlte::page')
@section('title', 'All Courses')
@section('content_header')

    <h1>
      All Courses
      <small> Courses</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">All courses</li>
    </ol>

@stop

@section('content')

<div class="pull-right">
    <p>
        <a href="{{url('admin/courses/create')}}" class="btn btn-primary btn-xs" title="Add Courses">
            <span class="glyphicon glyphicon-plus"></span>
        </a>
    </p>
</div>

<table class="table table-hover table-striped">
    <tr>
        <th>Id</th>
        <th>Course Name</th>
        <th>Created Date</th>
        <th>Updated Date</th>
        <th>Status</th>
        <th>Action</th>
    </tr>

    @foreach($courses as $course)
        <tr>
            <td>{{$course->id}}</td>
            <td>{{$course->course_name}}</td>
            <td>{{$course->created_at}}</td>
            <td>{{$course->updated_at}}</td>
            <td>
                @if($course->status)
                <label class="label label-success">Active</label>
                @else
                <label class="label label-danger">Inactive</label>
                @endif
                </td>
            <td>
                <form method="post" action="{{url('admin/courses/'.$course->id)}}">
                    <a href="{{url('admin/courses/'.$course->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit Courses">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                    {{csrf_field()}}

                        <button type="submit" class="btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-trash"></span>
                            <input type="hidden" name="_method" value="DELETE">
                        </button>
                </form>
            </td>
        </tr>
    @endforeach

</table>


@stop

