@extends('layout.app')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
   <strong> <p>{{$message}}</p></strong>
</div>
@endif




<div class="login-form">
    <form action="{{route('student.store')}}" method="post">
        @csrf
        <h2 class="text-center">Add New Student</h2>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Name"  name="name" value="{{old('name')}}">
            @if ($errors->has('name'))
               {{-- @foreach ($errors->get('name') as $error) --}}
                    <span class="text-danger">{{$errors->first('name')}}</span>
                {{-- @endforeach --}}

            @endif
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Department"  name="department" value="{{old('department')}}">

            @if ($errors->has('department'))
            {{-- @foreach ($errors->get('name') as $error) --}}
                 <span class="text-danger">{{$errors->first('department')}}</span>
             {{-- @endforeach --}}

         @endif
        </div>
        <div class="form-group">
             <input type="number" name="mobile" id="mobile"class="form-control" placeholder="Mobile"  name="number" value="{{old('mobile')}}">
             @if ($errors->has('mobile'))
             {{-- @foreach ($errors->get('name') as $error) --}}
                  <span class="text-danger">{{$errors->first('mobile')}}</span>
              {{-- @endforeach --}}

          @endif
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Add New Student</button>
        </div>

    </form>

</div>
@endsection
