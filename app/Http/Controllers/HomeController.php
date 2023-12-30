<?php

namespace App\Http\Controllers;

use view;
use App\Models\student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = student::paginate(5);
        return view('pages.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'name'=>'required',
            'department'=>'required',
            'mobile'=>'required',
        ]);

        student::create([
            'name'=>$request->name,
            'department'=>$request->department,
            'mobile'=>$request->mobile,
        ]);

        //return redirect()->route('pages.create');
        return redirect()->back()->with('success','student created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $data=student::find($id);
       // dd($data);
        return view('pages.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_edit=student::find($id);

        return view('pages.edit',compact('data_edit'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $data=student::find($id);

        $data->update([
            'name'=>$request->name,
            'department'=>$request->department,
            'mobile'=>$request->mobile,
        ]);
        return redirect()->route('student.index')->with('success','student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=student::find($id);
        $data->delete();
        return redirect()->back();
    }



    public function search(Request $request)
    {
        $search=$request->search;
        $students=student::where('name','like','%'.$search.'%')->paginate(5);
        return view('pages.index',compact('students'));
    }





}
