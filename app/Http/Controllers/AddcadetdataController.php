<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\AddCadetData;
use Illuminate\Support\Facades\Log;


class AddcadetdataController extends Controller
{
    //
    public function index(){
        $departments = Department::all();
        $cadetData = AddCadetData::all();
        return view('add_cadet', compact('departments','cadetData'));
    }

    public function view_data(){
        
        return view('view_data');
    }

    public function fetchData(Request $request){
    $val = $request->input('year');
    // print_r($val);


  
    // Assuming you want to find cadet data based on the year field
    $cadetData = AddCadetData::where('year', $val)->get();
    
    // Return the JSON response
    return response()->json(['success' => true, 'data' => $cadetData]);
    }

    

    public function store(Request $request) {
        print_r('hello world');
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required',
            'classNo' => 'required',
            'year' => 'required',
            'department' => 'required'
        ]);
    
        // Create a new instance of AddCadetData and save it
        $cadetData = new AddCadetData();
        $cadetData->name = $request->input('name');
        $cadetData->classNo = $request->input('classNo');
        $cadetData->year = $request->input('year');
        $cadetData->department = $request->input('department');
        $cadetData->save();
    
        // Fetch the newly added data
        $newData = AddCadetData::latest()->first();
    
        // Return the newly added data in JSON format
        return response()->json(['success' => true, 'data' => $newData]);
    }

    public function deleteCadet(Request $request,$id) {
        $cadet = AddCadetData::find($id);
        


        if ($cadet) {
            $cadet->delete();
            return response()->json(['success' => true, 'message' => 'Cadet deleted successfully']);
        } else {
            return response()->json(['success' => false, 'message' => 'Cadet not found'], 404);
        }
    }
    
    
    
}
