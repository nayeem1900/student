<?php

namespace App\Http\Controllers\Backend\Marks;

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
class MarksController extends Controller
{


    public function add()
    {

        $data['years'] = Year::orderBy('id','asc')->get();

        $data['classes'] = StudentClass::all();

        return view('backend.marks.marks-add', $data);


    }


}
