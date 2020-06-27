<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\StudentClass;
use DB;
use App\Model\year;

class YearController extends Controller
{

    public function view(){


        $data['allData']=Year::all();


        return view ('backend.setup.year.view-year',$data);


    }


    public function add(){

        return view('backend.setup.year.add-year');
    }

    public function store(Request $request){
        $this->validate($request,[

            'name'=>'required|unique:years,name',
        ]);

        $data =new Year();
        $data->name=$request->name;

        $data->save();
        session()->flash('success',' Logo update success');
        return redirect()->route('setups.student.year.view');
    }

    public function edit($id){

        $editData=Year::find($id);
        return view('backend.setup.year.add-year',compact('editData'));
    }


    public function update(Request $request,$id){

        $data =Year::find($id);
        $this->validate($request,[

            'name'=>'required|unique:years,name,'.$data->id
        ]);


        $data->name=$request->name;

        $data->save();
        session()->flash('success',' class update success');
        return redirect()->route('setups.student.year.view');

    }


    public function delete($id){

        $data=StudentClass::find($id);
        $data->delete();



        session()->flash('success', 'Logo has deleted Successfully');
        return redirect()->route('setups.student.class.view');
    }

}
