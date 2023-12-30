@extends('layout.app')
@section('content')


@if ($message = Session::get('success'))
<div class="alert alert-success">
   <strong> <p>{{$message}}</p></strong>
</div>
@endif




<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Student<b> Details</b></h2></div>
                    <div class="col-sm-4">
                        <form action="{{route('student.search')}}" method="POST">
                            <div class="search-box">
                                <i class="material-icons">&#xE8B6;</i>
                                <input type="text" class="form-control" placeholder="Search&hellip;" name="search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Name <i class="fa fa-sort"></i></th>
            <th>Department</th>
            <th>Mobile</th>

            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student )


        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->department}}</td>
            <td>{{$student->mobile}}</td>

            <td>
                <a href="{{route('student.show',$student->id)}}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                <a href="{{route('student.edit',$student->id)}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                <a href="{{route('student.delete',$student->id)}}" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
            </td>
        </tr>
       @endforeach
    </tbody>
</table>


<div class="clearfix">
    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>

    <ul class="pagination">
        {{-- <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
        <li class="page-item"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item active"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">4</a></li>
        <li class="page-item"><a href="#" class="page-link">5</a></li>
        <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li> --}}
        {{$students->links()}}
    </ul>
</div>
</div>
</div>
</div>
</div>

@endsection
