@extends ('students.layout')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">
    
        <div class="pull-left">
            <br>
            <h2 style="text-align:center">Edit Your Given Information</h2>
            <br>
        </div>

        <div class="pull-right">
        
            <a class="btn btn-outline-warning" href="{{ route('students.index') }}">Back</a><br>
        
        </div>
    
    </div>

</div>


@if ($errors->any())

    <div class="alert alert-danger">
    
        <strong>Whoops!</strong> There were some problems with your input. <br><br>

        <ul>
        
            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>
    
    </div>

@endif


<form action="{{ route('students.update',$student->id) }}" method="POST">

    @csrf 

    @method('PUT')

    <div class="row">
    
        <div class="col-xs-12 col-sm-12 col-md-12">
        
            <div class="form-group">
                <br>
                <strong>Name:</strong>

                <input type="text" name="name" value="{{ $student->name }}" class="form-control" placeholder="Full Name">

            </div>
        
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        
            <div class="form-group">
            
                <strong>Department Name:</strong>

                <input type="text" name="department" value="{{ $student->department }}" class="form-control" placeholder="Department Name">

            </div>
        
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        
            <div class="form-group">
            
                <strong>Batch:</strong>
                
                <input type="text" name="batch" value="{{ $student->batch }}" class="form-control" placeholder="Batch">

            </div>
        
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        
            <div class="form-group">
            
                <strong>Section:</strong>

                <input type="text" name="section" value="{{ $student->section }}" class="form-control" placeholder="Section">

            </div>
        
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        
            <div class="form-group">
            
                <strong>Student Id:</strong>

                <input type="text" name="student_id" value="{{ $student->student_id }}" class="form-control" placeholder="Student ID(xxx-xxx-xxx)">

            </div>
        
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        
            <div class="form-group">
            
                <strong>Phone:</strong>

                <input type="text" name="phone" value="{{ $student->phone }}" class="form-control" placeholder="Phone">

            </div>
        
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        
            <div class="form-group">
            
                <strong>University Name:</strong>

                <input type="text" name="university" value="{{ $student->university }}" class="form-control" placeholder="University Name">

            </div>
        
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        
            <button type="submit" class="btn btn-warning">Submit</button><br><br>
        
        </div>
    
    </div>

</form>

@endsection

