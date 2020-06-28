<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Model\StudentShift;
use Illuminate\Http\Request;
use DB;

class ShiftController extends Controller
{


    public function view(){


        $data['allData']=StudentShift::all();


        return view ('backend.setup.shift.view-shift',$data);


    }


    public function add(){

        return view('backend.setup.shift.add-shift');
    }

    public function store(Request $request){
        $this->validate($request,[

            'name'=>'required|unique:student_shifts,name',
        ]);

        $data =new StudentShift();
        $data->name=$request->name;

        $data->save();
        session()->flash('success',' Logo update success');
        return redirect()->route('setups.student.shift.view');
    }

    public function edit($id){

        $editData=StudentShift::find($id);
        return view('backend.setup.shift.add-shift',compact('editData'));
    }


    public function update(Request $request,$id){

        $data =StudentShift::find($id);
        $this->validate($request,[

            'name'=>'required|unique:student_shifts,name,'.$data->id
        ]);


        $data->name=$request->name;

        $data->save();
        session()->flash('success',' class update success');
        return redirect()->route('setups.student.shift.view');

    }



}
