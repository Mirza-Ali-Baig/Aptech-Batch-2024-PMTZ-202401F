@extends('welcome')

@section('content')
    <div class="row m-5 p-5">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$student->name}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$student->email}}</h6>
                  <p class="card-text"><i>Address : </i> {{$student->address}}</p>
                  <p class="card-text"> <i>Phone Number :</i>{{$student->phone}}</p>
                  <p class="card-text"><i>Age :</i> {{$student->age}}</p>
                  <a href="/students" class="btn btn-primary">Go Back</a>
                </div>
              </div>
        </div>
    </div>
@endsection