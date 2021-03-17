@extends('students.layout')

@section('content')

<div class="pull-left">
    <br>
    <h2 style="text-align:center">Check All Students Information</h2><br><br>
</div>



    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">StudentManagement</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-outline-success" aria-current="page" href="http://127.0.0.1:8000">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>




<div class="row">

    <div class="col-lg-12 margin-tb">
    
        <div class="pull-right">    
            <a class="btn btn-outline-success" href="{{ route('students.create')}}">
            Create New Student</a><br><br>
        
        </div>
    
    </div>

</div>

@if ($message = Session::get('success'))

    <div class="alert alert-success">
    
        <p>{{  $message }}</p>
    
    </div>

@endif


<table  class="table table-info table-striped table-bordered table-hover">

    <tr>
    
        <th>No</th>
        <th>StudentName</th>
        <th>DepartmentName</th>
        <th>Batch</th>
        <th>Section</th>
        <th>StudentID</th>
        <th>PhoneNumber</th>
        <th>UniversityName</th>
        <th width="250px">Action</th>
    
    </tr>

    @foreach ($students as $student)

    <tr>
    
        <td>{{ ++$i }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->department }}</td>
        <td>{{ $student->batch }}</td>
        <td>{{ $student->section }}</td>
        <td>{{ $student->student_id }}</td>
        <td>{{ $student->phone }}</td>
        <td>{{ $student->university }}</td>

        <td>
        
        <form action="{{ route('students.destroy',$student->id) }}" method="POST">
        
            <a class="btn btn-outline-info" href="{{ route('students.show',$student->id) }}">Show</a>

            <a class="btn btn-outline-secondary" href="{{ route('students.edit',$student->id) }}">Edit</a>

            @csrf

            @method('DELETE')


            <button type="submit" class="btn btn-outline-danger">Delete</button>
        
        </form>
        
        </td>
    
    </tr>

    @endforeach


</table>

@endsection