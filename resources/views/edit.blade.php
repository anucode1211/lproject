@extends('layout')

@section('content')

<style>
    .container {
      max-width: 800px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Edit & Update
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('employees.update', $employee->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $employee->name }}"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="{{ $employee->email }}"/>
          </div>
           <div class="form-group">
              <label for="employeeid">Employee Id</label>
              <input type="text" class="form-control" name="employeeid" value="{{ $employee->employeeid }}"/>
          </div>
          <div class="form-group">
              <label for="age">Age</label>
              <input type="number" class="form-control" name="age" value="{{ $employee->age }}"/>
          </div>
             <div class="form-group">
              <label for="gender">Gender</label>
              <input type="text" class="form-control" name="gender" value="{{ $employee->gender }}"/>
          </div>
           <div class="form-group">
              <label for="mobile">Mobile No</label>
              <input type="tel" class="form-control" name="mobile" value="{{ $employee->mobile }}"/>
          </div>
           <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" value="{{ $employee->address }}"/>
          </div>
           <div class="form-group">
              <label for="state">State</label>
              <input type="text" class="form-control" name="state" value="{{ $employee->state }}"/>
          </div>
           <div class="form-group">
              <label for="joiningdate">Joining Date</label>
              <input type="date" class="form-control" name="joiningdate" value="{{ $employee->joiningdate }}"/>
          </div>
          <div class="form-group">
              <label for="adharno">Adhar No</label>
              <input type="text" class="form-control" name="adharno" value="{{ $employee->adharno }}"/><br>


          <button type="submit" class="btn btn-block btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection