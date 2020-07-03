<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Model\ExamType;
use Illuminate\Http\Request;

class ExamTypeController extends Controller
{

    public function view(){


        $data['allData']=ExamType::all();


        return view ('backend.setup.exam_type.view-exam-type',$data);


    }


    public function add(){

        return view('backend.setup.exam_type.add-exam-type');
    }

    public function store(Request $request){
        $this->validate($request,[

            'name'=>'required|unique:exam_types,name',
        ]);

        $data =new ExamType();
        $data->name=$request->name;

        $data->save();
        session()->flash('success',' Exam update success');
        return redirect()->route('setups.exam.type.view');
    }

    public function edit($id){

        $editData=ExamType::find($id);
        return view('backend.setup.exam_type.add-exam-type',compact('editData'));
    }


    public function update(Request $request,$id){

        $data =ExamType::find($id);
        $this->validate($request,[

            'name'=>'required|unique:exam_types,name,'.$data->id
        ]);


        $data->name=$request->name;

        $data->save();
        session()->flash('success',' class update success');
        return redirect()->route('setups.exam.type.view');

    }


    public function delete($id){

        $data=StudentClass::find($id);
        $data->delete();



        session()->flash('success', 'Logo has deleted Successfully');
        return redirect()->route('setups.student.class.view');
    }


}
