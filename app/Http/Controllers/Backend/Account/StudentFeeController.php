<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use App\Model\AccountStudentFee;
use App\Model\FeeCategory;
use App\Model\StudentClass;
use App\Model\Year;
use Illuminate\Http\Request;

class StudentFeeController extends Controller
{

public function view()
{

    $data['allData'] = AccountStudentFee::all();
    return view('backend.account.student.view-fee', $data);
}

public function add(){


    $data['years']=Year::orderBy('id','DESC')->get();
    $data['classes']=StudentClass::all();
    $data['fee_categories']=FeeCategory::all();
    return view ('backend.account.student.add-fee', $data);

}

public function getstudent(Request $request){
    $year_id=$request->year_id;
    $class_id=$request->class_id;
    $fee_category_id=$request->fee_category_id;


}
}
