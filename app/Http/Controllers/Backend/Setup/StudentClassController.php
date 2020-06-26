<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\StudentClass;
use DB;
class StudentClassController extends Controller
{

    public function view(){


        $data['allData']=StudentClass::all();


        return view ('backend.setup.student_class.view-class',$data);


    }


   public function add(){

        return view('backend.setup.student_class.add-class');
    }

    public function store(Request $request){
        $this->validate($request,[

            'name'=>'required|unique:student_classes,name',
        ]);

            $data =new StudentClass();
        $data->name=$request->name;

        $data->save();
        session()->flash('success',' Logo update success');
        return redirect()->route('setups.student.class.view');
    }

    public function edit($id){

        $editData=StudentClass::find($id);
        return view('setups.student.class.add',compact('editData'));
    }


    public function update(Request $request,$id){

        $data =StudentClass::find($id);
        $this->validate($request,[

            'name'=>'required|unique:student_classes,name,'.$data->id
        ]);


        $data->name=$request->name;

        $data->save();
        session()->flash('success',' class update success');
        return redirect()->route('setups.student.class.view');

    }


    public function delete($id){

        $slider=StudentClass::find($id);

        if(! is_null($slider)){
            //if it is parent Brand delete sub Brand


            if (file_exists('public/upload/logo_images/'.$slider->image) AND! empty($slider->image))
            {
                unlink('public/upload/logo_images/'.$slider->image);
            }

            $slider->delete();
        }

        session()->flash('success', 'Logo has deleted Successfully');
        return redirect()->route('sliders.view');
    }

}
