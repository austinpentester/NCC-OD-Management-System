<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department; // Assuming Department is your model


class AddDepartment extends Controller
{
    //

    public function index(){
        $departments = Department::all();
        return view('add_department', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'department' => 'required|string|max:255',
        ]);

        $department = new Department();
        $department->department = $request->department;
        $department->save();

        return redirect()->back()->with('success', 'Department added successfully!');
    }

    public function destroy(Request $request, $id){
        $department = Department::find($id);
        $department->delete();
        return redirect()->back()->with('success', 'Department deleted successfully!');
    }
}
