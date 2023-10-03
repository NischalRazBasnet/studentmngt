@extends('layouts.app')

@section('content')
<div class="container-fluid flex-column p-5 bg-light text-dark text-center">
  <div class="d-flex justify-content-center">
    <h1>Student Details</h1>
  </div>
</div>

<div class="container-fluid p-4">
  <div class="d-flex justify-content-end p-2">
    <a href="" class='btn btn-primary' data-bs-toggle="modal" data-bs-target="#myModal">Add Student</a>
  </div>
  
<div class="row">
  <div class="col-2">
    <div class="list-group">
      <a href="{{ route('program') }}" class="list-group-item list-group-item-action">PROGRAMS</a>
      <a href="{{ route('student') }}" class="list-group-item list-group-item-action">STUDENTS</a>
    </div>
</div>
    <div class="col-10">
  <table class="table">
    <thead class="table-dark">
      <tr>
        <td>Full Name</td>
        <td>Level</td>
        <td>Program</td>
        <td>Semester</td>
        <td>Contact No.</td>
        <td>Address</td>
        <td>Edit</td>
        <td>Delete</td>
      </tr>        
    </thead>
    <tbody>
      @foreach($students as $s )
      <tr>
        <td>{{$s->fname}}</td>
        <td>{{$s->level}}</td>
        <td>{{$s->programName}} </td>
        <td>{{$s->sem}}</td>
        <td>{{$s->contact}}</td>
        <td>{{$s->address}}</td>
        <td>
          <a href="student/edit/{{$s->id}}" class="btn btn-secondary">Edit</a>
        </td>
        <td>
            <a href="student/delete/{{$s->id}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      
    <div class="modal-header">
      <h4 class="modal-title">Add Student</h4>
      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>
    
    <div class="modal-body">
      <form action="{{ route('studentstore') }}" method='POST' id='form'>
      @csrf
      <div class="form-group">
        <label form="">Full Name</label>
        <input type="text" class='form-control' name='fname' id='fname'>
      </div><div class="form-group">
        <label form="">Level</label>
        <input type="text" class='form-control' name='level' id='level'>
      </div>
      <div class="form-group">
        <label form="">Program Name</label>
        <input type="text" class='form-control' name='programName' id='programName'>
      </div>
      <div class="form-group">
        <label form="">Semester</label>
        <input type="text" class='form-control' name='sem' id='sem'>
      </div>
      <div class="form-group">
        <label form="">Contact No.</label>
        <input type="text" class='form-control' name='contact' id='contact'>
      </div>
      <div class="form-group">
        <label form="">Address</label>
        <input type="text" class='form-control' name='address' id='address'>
      </div>
      <div class="form-group">
        <input type="submit" class='form-control btn btn-success mt-4' id='submit' value='Add'>
      </div>
      </form>
    </div>
    </div>
  </div>
</div>

@endsection