<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Model\FeeCategory;
use Illuminate\Http\Request;
use App\Model\StudentClass;
use App\Model\year;
use DB;
class FeeCategoryController extends Controller
{

    public function view(){



        $data['allData']=FeeCategory::all();


        return view ('backend.setup.fee_category.view-fee-category',$data);


    }


    public function add(){

        return view('backend.setup.fee_category.add-fee-category');
    }

    public function store(Request $request){
        $this->validate($request,[

            'name'=>'required|unique:fee_categories,name',
        ]);

        $data =new FeeCategory();
        $data->name=$request->name;

        $data->save();
        session()->flash('success',' Logo update success');
        return redirect()->route('setups.fee.category.view');
    }

    public function edit($id){

        $editData=FeeCategory::find($id);
        return view('backend.setup.fee_category.add-fee-category',compact('editData'));
    }


    public function update(Request $request,$id){

        $data =FeeCategory::find($id);
        $this->validate($request,[

            'name'=>'required|unique:fee_categories,name,'.$data->id
        ]);


        $data->name=$request->name;

        $data->save();
        session()->flash('success',' class update success');
        return redirect()->route('setups.fee.category.view');

    }


    public function delete($id){

        $data=FeeCategory::find($id);
        $data->delete();



        session()->flash('success', 'Logo has deleted Successfully');
        return redirect()->route('setups.fee.category.view');
    }

}
