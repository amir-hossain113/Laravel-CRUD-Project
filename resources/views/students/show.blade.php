@extends('students.layout')

@section('content')

<div class="pull-left">
    <br>
    <h2 style="text-align:center">All Information About A Student</h2><br><br>

</div>

<a href="{{ route('students.index') }}" class="btn btn-outline-warning">Back</a><br><br>


    <div class="form-group">
        <strong>Student Name : </strong>{{$student->name}}
    </div>


    <div class="form-group">
        <strong>Department Name : </strong>{{$student->department}}
    </div>

    <div class="form-group">
        <strong>Batch : </strong>{{$student->batch}}
    </div>

    <div class="form-group">
        <strong>Section : </strong>{{$student->section}}
    </div>

    <div class="form-group">
        <strong>Student ID : </strong>{{$student->student_id}}
    </div>

    <div class="form-group">
        <strong>Phone Number : </strong>{{$student->phone}}
    </div>

    <div class="form-group">
        <strong>University Name : </strong>{{$student->university}}
    </div>


@endsection