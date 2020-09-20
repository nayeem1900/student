<?php

namespace App\Http\Controllers\Backend\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\LeavePurpose;
use App\Model\EmployeeSalaryLog;
use App\Model\AssignStudent;
use App\Model\Designation;
use App\Model\DiscountStudent;
use App\Model\StudentClass;
use App\Model\StudentGroup;
use App\Model\EmployeeAttendence;
use App\Model\EmployeeLeave;
use App\User;

use Illuminate\Support\Facades\DB;
use PDF;

class EmployeeAttendController extends Controller
{
    public function view(){




        $data['allData']=EmployeeAttendence::select('date')->groupBy('date')->orderBy('id','desc')->get();


        return view ('backend.employee.employee_attend.view-attendence', $data);


    }



    public function add(){
        $data['employees']=User::where('usertype','employee')->get();

        $data['leave_purpose']=LeavePurpose::all();


        return view('backend.employee.employee_attend.add-attendence',$data);

    }

    public function store(Request $request){

       $countemployee=count($request->employee_id);
       for($i=0; $i<$countemployee;$i++){
           $attend_status='attend_status'.$i;
           $attend=new EmployeeAttendence();
           $attend->date=date('Y-m-d',strtotime($request->date));
           $attend->employee_id=$request->employee_id[$i];
           $attend->attend_status=$request->$attend_status;
           $attend->save();

       }

        return redirect()->route('employees.attendence.view')->with('success', 'Data insert successfull');


    }

    public function edit($date){
        $data['editData']=EmployeeAttendence::where('date',$date)->get();
        $data['employees']=User::where('usertype','employee')->get();

        $data['leave_purpose']=LeavePurpose::all();


        return view('backend.employee.employee_attend.add-attendence',$data);



    }




    public function details($id)
    {
        $data ['details']=User::find($id);
        $pdf = PDF::loadView('backend/employee/employee_reg/employee-details-pdf', $data);
        $pdf->SetProtection(['copy', 'print'], '', 'pass');
        return $pdf->stream('document.pdf');
    }



}
