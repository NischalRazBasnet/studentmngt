@extends('layouts.app')

@section('content')
<div class="container-fluid flex-column p-5 bg-light text-dark text-center">
  <div class="d-flex justify-content-center">
    <h1>Program Details</h1>
  </div>
</div>

<div class="container-fluid p-4">
  <div class="d-flex justify-content-end p-2">
    <a href="" class='btn btn-primary' data-bs-toggle="modal" data-bs-target="#myModal">Add Program</a>
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
        <td>Level</td>
        <td>Faculty</td>
        <td>Program</td>
        <td>Edit</td>
        <td>Delete</td>
      </tr>        
    </thead>
    <tbody>
      @foreach($programs as $p )
      <tr>
        <td>{{$p->level}}</td>
        <td>{{$p->faculty}}</td>
        <td>{{$p->programName}} </td>
        <td>
          <a href="program/edit/{{$p->id}}" class="btn btn-secondary">Edit</a>
          <!-- <a href="program/edit/{{$p->id}}" class='btn btn-secondary editModal' data-bs-toggle="modal" data-bs-target="#editModal">Edit</a> -->
        </td>
        <td>
            <a href="program/delete/{{$p->id}}" class="btn btn-danger">Delete</a>
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
      <h4 class="modal-title">Add Program</h4>
      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>
    
    <div class="modal-body">
      <form action="{{ route('programstore') }}" method='POST' id='form'>
      @csrf
      <div class="form-group">
        <label form="">Level</label>
        <input type="text" class='form-control' name='level' id='level'>
      </div>
      <div class="form-group">
        <label form="">Faculty</label>
        <input type="text" class='form-control' name='faculty' id='faculty'>
      </div>
      <div class="form-group">
        <label form="">Program Name</label>
        <input type="text" class='form-control' name='programName' id='programName'>
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