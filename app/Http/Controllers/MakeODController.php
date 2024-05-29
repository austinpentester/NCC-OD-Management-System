<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddCadetData;    
use App\Models\MakeOd;

class MakeODController extends Controller
{
    // index function
    public function index()
    {

        $allDates = MakeOd::all();
        return view('makeOD1', compact('allDates'));
    }

    public function fetchData(Request $request){
        $val = $request->input('year');
        
        // Assuming you want to find cadet data based on the year field
        $cadetData = AddCadetData::where('year', $val)->get();
        
        // Return the JSON response
        return response()->json(['success' => true, 'data' => $cadetData]);
    }
    

    // insert a OD to database
    public function insertOD(Request $request){

        $year = $request->year;
        $day = $request->day;
        $odlist = implode(',', $request->checkedIds);
        
        // Check if a record with the specified date exists in the database
        $existingMakeOd = MakeOd::where('Date', $request->date)->first();
    
        // If a record exists, update the existing row with the new data
        if ($existingMakeOd) {
            if ($year == "First Year") {
                if ($day == "Full Day") {
                    $existingMakeOd->FD_FY = $odlist;
                } else {
                    $existingMakeOd->HD_FY = $odlist;
                }
            } elseif ($year == "Second Year") {
                if ($day == "Full Day") {
                    $existingMakeOd->FD_SY = $odlist;
                } else {
                    $existingMakeOd->HD_SY = $odlist;
                }
            } elseif ($year == "Third Year") {
                if ($day == "Full Day") {
                    $existingMakeOd->FD_TY = $odlist;
                } else {
                    $existingMakeOd->HD_TY = $odlist;
                }
            }
            $existingMakeOd->save();
        } else {
            // If no record exists, insert a new row with the provided data
            $makeOd = new MakeOd();
            $makeOd->Date = $request->date;
            if ($year == "First Year") {
                if ($day == "Full Day") {
                    $makeOd->FD_FY = $odlist;
                } else {
                    $makeOd->HD_FY = $odlist;
                }
            } elseif ($year == "Second Year") {
                if ($day == "Full Day") {
                    $makeOd->FD_SY = $odlist;
                } else {
                    $makeOd->HD_SY = $odlist;
                }
            } elseif ($year == "Third Year") {
                if ($day == "Full Day") {
                    $makeOd->FD_TY = $odlist;
                } else {
                    $makeOd->HD_TY = $odlist;
                }
            }
            $makeOd->save();
        }
    
        return response()->json(['success' => true,'message' => 'Cadets Added']);
    }
    

    // delete od function

    public function deleteOD(Request $request,$id) {
        $cadet = MakeOd::find($id);
        
        if ($cadet) {
            $cadet->delete();
            return response()->json(['success' => true, 'message' => 'Cadet deleted successfully']);
        } else {
            return response()->json(['success' => false, 'message' => 'Cadet not found'], 404);
        }
    }
    
    // view od

    public function viewOD($id) {
        $date = "";
        $allOD = MakeOd::where('id', '=', $id)->get();
    
        $fd_fy = []; // First year
        $hd_fy = []; // High school first year
        $fd_sy = []; // Second year
        $hd_sy = []; // High school second year
        $fd_ty = []; // Third year
        $hd_ty = []; // High school third year
    
        foreach ($allOD as $od) {
            $date = $od->Date;
            $val_fd_fy = $od->FD_FY; 
            $val_hd_fy = $od->HD_FY;
            $val_fd_sy = $od->FD_SY;
            $val_hd_sy = $od->HD_SY;
            $val_fd_ty = $od->FD_TY;
            $val_hd_ty = $od->HD_TY;
    
            // First year
            $arrayID_fd_fy = explode(',', $val_fd_fy);
            foreach($arrayID_fd_fy as $id){
                $userRow = AddCadetData::find($id);
                if($userRow) {
                    $fd_fy[] = $userRow;
                }
            }
    
            // High school first year
            $arrayID_hd_fy = explode(',', $val_hd_fy);
            foreach($arrayID_hd_fy as $id){
                $userRow = AddCadetData::find($id);
                if($userRow) {
                    $hd_fy[] = $userRow;
                }
            }
    
            // Second year
            $arrayID_fd_sy = explode(',', $val_fd_sy);
            foreach($arrayID_fd_sy as $id){
                $userRow = AddCadetData::find($id);
                if($userRow) {
                    $fd_sy[] = $userRow;
                }
            }
    
            // High school second year
            $arrayID_hd_sy = explode(',', $val_hd_sy);
            foreach($arrayID_hd_sy as $id){
                $userRow = AddCadetData::find($id);
                if($userRow) {
                    $hd_sy[] = $userRow;
                }
            }
    
            // Third year
            $arrayID_fd_ty = explode(',', $val_fd_ty);
            foreach($arrayID_fd_ty as $id){
                $userRow = AddCadetData::find($id);
                if($userRow) {
                    $fd_ty[] = $userRow;
                }
            }
    
            // High school third year
            $arrayID_hd_ty = explode(',', $val_hd_ty);
            foreach($arrayID_hd_ty as $id){
                $userRow = AddCadetData::find($id);
                if($userRow) {
                    $hd_ty[] = $userRow;
                }
            }
        }
    
        // Return all the data to the view
        return view('view_OD', [
            'fd_fy' => $fd_fy,
            'hd_fy' => $hd_fy,
            'fd_sy' => $fd_sy,
            'hd_sy' => $hd_sy,
            'fd_ty' => $fd_ty,
            'hd_ty' => $hd_ty,
            'thisdate' => $date
        ]);
    }
    
    
    

}
