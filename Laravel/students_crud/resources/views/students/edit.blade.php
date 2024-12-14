@extends('welcome')

@section('content')
    <div class="row m-5 p-5">
        <div class="col-6">
            <h1>Edit Students</h1>
            <form action="/students/{{$student->id}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" value="{{$student->name}}" name="name"  placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" value="{{$student->email}}" name="email"  placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label>Age</label>
                  <input type="text" class="form-control" value="{{$student->age}}" name="age"  placeholder="Enter Age">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" value="{{$student->address}}" name="address"  placeholder="Enter Address">
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" class="form-control" value="{{$student->phone}}" name="phone"  placeholder="Enter Phone">
                </div>
                <button type="submit" class="btn btn-primary my-2">Update</button>
              </form>
        </div>
    </div>
@endsection