<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RollController extends Controller
{


    public function view()
    {

       dd('ok');
        $data['years'] = Year::orderBy('id', 'asc')->get();

        $data['classes'] = StudentClass::all();
        $data['year_id'] = Year::orderBy('id', 'asc')->first()->id;
        $data['class_id'] = StudentClass::orderBy('id', 'asc')->first()->id;
        $data['allData'] = AssignStudent::where('year_id', $data['year_id'])->where('class_id', $data['class_id'])->get();


        return view('backend.student.roll_generate.view-roll-generate', $data);


    }



    }
