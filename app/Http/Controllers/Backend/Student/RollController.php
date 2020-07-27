<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\AssignStudent;
use App\Model\DiscountStudent;
use App\Model\StudentClass;
use App\Model\StudentGroup;
use App\Model\StudentShift;
use App\Model\Year;
use App\User;
use Illuminate\Support\Facades\DB;
use PDF;

class RollController extends Controller
{


    public function view()
    {

        $data['years'] = Year::orderBy('id', 'asc')->get();

        $data['classes'] = StudentClass::all();

        return view('backend.student.student_roll.view-roll-generate', $data);


    }

    public function getStudent(Request $request){
      /* dd('ok');*/
      $allData=AssignStudent::with(['student'])->where('year_id',$request->year_id)->where('class_id',$request->class_id)->get();
dd($allData->toArray());
return response()->json($allData);

    }



    }
