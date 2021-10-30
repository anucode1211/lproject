@extends('layout')

@section('content')

<style>
    .container {
      max-width: 100%;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-bordered">
    <thead>
        <tr>
         
          <td>Name</td>
          <td>Email</td>
          <td>Emp-Id</td>
          <td>Age</td>
          <td>Gender</td>
          <td>Mobile</td>
          <td>Address</td>
          <td>State</td>
          <td>JoiningDate</td>
          <td>Adhar</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($employee as $employees)
        <tr>
            
            <td>{{$employees->name}}</td>
            <td>{{$employees->email}}</td>
            <td>{{$employees->employeeid}}</td>
            <td>{{$employees->age}}</td>
            <td>{{$employees->gender}}</td>
            <td>{{$employees->mobile}}</td>
            <td>{{$employees->address}}</td>
            <td>{{$employees->state}}</td>
            <td>{{$employees->joiningdate}}</td>
            <td>{{$employees->adharno}}</td>
            
            <td class="text-center">
                <a href="{{ route('employees.edit', $employees->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('employees.destroy', $employees->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection