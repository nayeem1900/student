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




        $data['allData']=EmployeeAttendence::orderBy('id','desc')->get();


        return view ('backend.employee.employee_attend.view-attendence', $data);


    }



    public function add(){
        $data['employees']=User::where('usertype','employee')->get();

        $data['leave_purpose']=LeavePurpose::all();


        return view('backend.employee.employee_attend.add-attendence',$data);

    }

    public function store(Request $request){

        if($request->leave_purpose_id=="0"){
            $leavepurpose= new LeavePurpose();
            $leavepurpose->name=$request->name;
            $leavepurpose->save();
            $leave_purpose_id=$leavepurpose->id;
        }else{
            $leave_purpose_id=$request->leave_purpose_id;
        }

        $employee_leave=new EmployeeLeave();
        $employee_leave->employee_id=$request->employee_id;
        $employee_leave->start_date=(date('Y-m-d',strtotime($request->start_date)));
        $employee_leave->end_date=(date('Y-m-d',strtotime($request->end_date)));
        $employee_leave->leave_purpose_id=$leave_purpose_id;
        $employee_leave->save();


        return redirect()->route('employees.leave.view')->with('success', 'Leave Insert successfull');
    }

    public function edit($id){
        $data['editData']=EmployeeLeave::find($id);
        $data['employees']=User::where('usertype','employee')->get();

        $data['leave_purpose']=LeavePurpose::all();


        return view('backend.employee.employee_leave.add-leave',$data);




    }


    public function update(Request $request,$id){

        if($request->leave_purpose_id=="0"){
            $leavepurpose= new LeavePurpose();
            $leavepurpose->name=$request->name;
            $leavepurpose->save();
            $leave_purpose_id=$leavepurpose->id;
        }else{
            $leave_purpose_id=$request->leave_purpose_id;
        }

        $employee_leave= EmployeeLeave::find($id);
        $employee_leave->employee_id=$request->employee_id;
        $employee_leave->start_date=(date('Y-m-d',strtotime($request->start_date)));
        $employee_leave->end_date=(date('Y-m-d',strtotime($request->end_date)));
        $employee_leave->leave_purpose_id=$leave_purpose_id;
        $employee_leave->save();


        return redirect()->route('employees.leave.view')->with('success', 'Leave Update successfull');


    }



    public function details($id)
    {
        $data ['details']=User::find($id);
        $pdf = PDF::loadView('backend/employee/employee_reg/employee-details-pdf', $data);
        $pdf->SetProtection(['copy', 'print'], '', 'pass');
        return $pdf->stream('document.pdf');
    }



}
