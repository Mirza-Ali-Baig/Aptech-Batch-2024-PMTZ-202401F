@extends('welcome')

@section('content')
    <div class="row m-5 p-5">
        <div class="col">
            <div class="row my-3">
                <div class="col-10">
                    <h1>
                        All Students
                    </h1>
                </div>
                <div class="col">
                    <a href="/students/create" class="btn btn-primary w-100">Create Student</a>
                </div>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($students as $student)
                    <tr>
                      <th scope="row">{{$student->id}}</th>
                      <td>{{$student->name}}</td>
                      <td>{{$student->email}}</td>
                      <td>{{$student->age}}</td>
                      <td>{{$student->address}}</td>
                      <td>{{$student->phone}}</td>
                      <td>
                        <a href="/students/{{$student->id}}" class="btn btn-success">Show</a>
                        <a href="/students/{{$student->id}}/edit" class="btn btn-primary">Edit</a>
                        <a  href="/students/{{$student->id}}/delete" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                        
                    @empty
                        <caption>
                            No Students Found
                        </caption>
                    @endforelse
                </tbody>
              </table>
        </div>
    </div>
@endsection