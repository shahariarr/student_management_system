@extends('layout.app')
@section('content')





<div class="login-form">
    <form action="{{route('student.update',$data_edit->id)}}">
        @csrf
        @method('PATCH')
        <h2 class="text-center">Add New Student</h2>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Student" required="required" name="name" value="{{old('name',$data_edit->name)}}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Department" required="required" name="department" value="{{old('department',$data_edit->department)}}">
        </div>
        <div class="form-group">
             <input type="tel" name="mobile" id="mobile"class="form-control" placeholder="Mobile" required="required" value="{{old('mobile',$data_edit->mobile)}}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Add New Student</button>
        </div>

    </form>

</div>
@endsection

