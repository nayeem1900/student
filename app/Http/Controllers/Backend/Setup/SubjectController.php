<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Model\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{


    public function view(){


        $data['allData']=Subject::all();


        return view ('backend.setup.subject.view-subject',$data);


    }


    public function add(){

        return view('backend.setup.subject.add-subject');
    }

    public function store(Request $request){
        $this->validate($request,[

            'name'=>'required|unique:subjects,name',
        ]);

        $data =new Subject();
        $data->name=$request->name;

        $data->save();
        session()->flash('success',' Subjuect update success');
        return redirect()->route('setups.subject.view');
    }

    public function edit($id){

        $editData=Subject::find($id);
        return view('backend.setup.subject.add-subject',compact('editData'));
    }


    public function update(Request $request,$id){

        $data =Subject::find($id);
        $this->validate($request,[

            'name'=>'required|unique:subjects,name,'.$data->id
        ]);


        $data->name=$request->name;

        $data->save();
        session()->flash('success',' class update success');
        return redirect()->route('setups.subject.view');

    }


    public function delete($id){

        $data=StudentClass::find($id);
        $data->delete();



        session()->flash('success', 'Logo has deleted Successfully');
        return redirect()->route('setups.student.class.view');
    }


}
