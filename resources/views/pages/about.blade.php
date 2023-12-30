@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">About Student Management System</h1>

    <div class="card mt-4">
        <div class="card-body">
            <h2 class="card-title">Introduction</h2>
            <p class="card-text">This is a student management system built with Laravel and Bootstrap. It allows you to manage student data efficiently and easily.</p>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h2 class="card-title">Student Management</h2>
            <p class="card-text">You can add, update, and delete student data. This includes information like name, department, and mobile number.</p>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h2 class="card-title">Student Comments</h2>
            <p class="card-text">Students can leave comments and feedback. This helps improve the system and the overall student experience.</p>
        </div>
    </div>
</div>
@endsection
