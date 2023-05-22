@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Student Page</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>studentID</label></br>
        <input type="text" name="studentID" id="studentID" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Department</label></br>
        <input type="text" name="department" id="department" class="form-control"></br>
        <label>Major</label></br>
        <input type="text" name="major" id="major" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop