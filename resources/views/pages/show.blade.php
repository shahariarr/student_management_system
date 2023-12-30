@extends('layout.app')
@section('content')

<div class="mx-auto text-center mt-5">
    <h1>Student Details</h1>
<div class="card mx-auto text-center" style="width: 30rem;">

    <div class="card-body">

        <h5 class="card-title">Student ID:<b>{{$data->id}}</b></h5>
        <h5 class="card-title">Person Name:<b>{{$data->name}}</b></h5>
        <p class="card-text">Department Name:<b>{{$data->department}}</b></p>
        <p class="card-text">Mobile:<b>{{$data->mobile}}</b></p>
    </div>
</div>
</div>
@endsection


