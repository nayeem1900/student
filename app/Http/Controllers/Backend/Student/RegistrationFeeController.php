<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use App\Model\FeeCategoryAmount;
use Illuminate\Http\Request;
use App\Model\AssignStudent;
use App\Model\DiscountStudent;
use App\Model\StudentClass;
use App\Model\StudentGroup;
use App\Model\StudentShift;
use App\Model\Year;
use App\User;
use Illuminate\Support\Facades\DB;
use Mpdf\Tag\A;
use PDF;

class RegistrationFeeController extends Controller
{


    public function view()
    {

        $data['years'] = Year::orderBy('id', 'asc')->get();

        $data['classes'] = StudentClass::all();

        return view('backend.student.registration_fee.view-registration-fee', $data);


    }

    public function getStudent(Request $request){
      $year_id=$request->year_id;
        $class_id=$request->class_id;
      if($year_id!=''){
          $where[]=['year_id','like',$year_id.'%'];

      }
        if($class_id!=''){
            $where[]=['class_id','like',$class_id.'%'];

        }
        $allStudent=AssignStudent::with(['discountstudent'])->where($where)->get();
        $html['thsource']='<th> SL</th>';
        $html['thsource']='<th>ID NO</th>';
        $html['thsource']='<th>Roll No</th>';
        $html['thsource']='<th>Registration Fee</th>';
        $html['thsource']='<th>Discount Amount</th>';
        $html['thsource']='<th>Fee (This Student)</th>';
        $html['thsource']='<th>Action</th>';

        foreach ($allStudent as $key=>$v){

$registrationfee=FeeCategoryAmount::where('fee_category_id','1')->where('class_id',$v->class_id)->first();
$color='success';
$html[$key]['tdsource']='<td>'.($key+1).'</td>';
            $html[$key]['tdsource']='<td>'.($key+1).'</td>';
            $html[$key]['tdsource']='<td>'.$v['student']['id_no'].'</td>';
           $html[$key]['tdsource']='<td>'.$v->roll.'</td>';
            $html[$key]['tdsource']='<td>'.$registrationfee->amoutn.'TK'.'</td>';
            $html[$key]['tdsource']='<td>'.$v['discount']['discount'].'%'.'</td>';

            $orginalfee=$registrationfee->amount;
            $discount=$v['discount']['discount'];
            $discountablefee=$discount/100*$orginalfee;
            $finalfee=(float)$orginalfee-(float)$discountablefee;

            $html[$key]['tdsource'].='<td>'.$finalfee.'TK'.'</td>';
            $html[$key]['tdsource'].='<td>;
           $html[$key][]

        }

return response()->json(@html);
}
}
    
    
  

   
