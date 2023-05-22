@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Student Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>studentID</label></br>
        <input type="text" name="studentID" id="studentID" value="{{$students->studentID}}" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>Department</label></br>
        <input type="text" name="department" id="department" value="{{$students->department}}" class="form-control"></br>
        <label>Major</label></br>
        <input type="text" name="major" id="major" value="{{$students->major}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop