<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Model\StudentGroup;
use Illuminate\Http\Request;
use App\Model\StudentClass;
use DB;
use App\Model\year;

class GroupController extends Controller
{

    public function view(){


        $data['allData']=StudentGroup::all();


        return view ('backend.setup.group.view-group',$data);


    }


    public function add(){

        return view('backend.setup.group.add-group');
    }

    public function store(Request $request){
        $this->validate($request,[

            'name'=>'required|unique:student_groups,name',
        ]);

        $data =new StudentGroup();
        $data->name=$request->name;

        $data->save();
        session()->flash('success',' Logo update success');
        return redirect()->route('setups.student.group.view');
    }

    public function edit($id){

        $editData=StudentGroup::find($id);
        return view('backend.setup.group.add-group',compact('editData'));
    }


    public function update(Request $request,$id){

        $data =StudentGroup::find($id);
        $this->validate($request,[

            'name'=>'required|unique:student_groups,name,'.$data->id
        ]);


        $data->name=$request->name;

        $data->save();
        session()->flash('success',' class update success');
        return redirect()->route('setups.student.group.view');

    }




}
