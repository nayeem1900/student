<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Model\FeeCategory;
use App\Model\FeeCategoryAmount;
use App\Model\StudentGroup;
use Illuminate\Http\Request;
use App\Model\StudentClass;
use App\Model\year;
use phpDocumentor\Reflection\Types\Null_;


class FeeAmountController extends Controller
{


    public function view(){


        $data['allData']=FeeCategoryAmount::select('fee_category_id')->groupBy('fee_category_id')->get();


        return view ('backend.setup.fee_amount.view-fee-amount',$data);


    }


    public function add(){
        $data['fee_categories']=FeeCategory::all();
        $data['classes']=StudentClass::all();

        return view('backend.setup.fee_amount.add-fee-amount',$data);
    }

    public function store(Request $request){

       $countClass=count($request->class_id);

if($countClass != Null){
    for($i=0; $i < $countClass ; $i++){
        $fee_amount=new FeeCategoryAmount();
        $fee_amount->fee_category_id=$request->fee_category_id;
        $fee_amount->class_id=$request->class_id[$i];
        $fee_amount->amount=$request->amount[$i];
        $fee_amount->save();

}
           }

        session()->flash('success',' Logo update success');
        return redirect()->route('setups.fee.amount.view');
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
