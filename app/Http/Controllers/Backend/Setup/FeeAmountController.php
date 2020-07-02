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

    public function edit($fee_category_id){

        $data['editData']=FeeCategoryAmount::where ('fee_category_id',$fee_category_id)->orderBy('class_id','asc')->get();
        $data['fee_categories']=FeeCategory::all();
        $data['classes']=StudentClass::all();

        return view('backend.setup.fee_amount.edit-fee-amount',$data);
    }


    public function update(Request $request,$fee_category_id){
        if ($request->class_id==Null){

return redirect()->back()->with('error', 'sorry you dont select any Item');
        }else{

            FeeCategoryAmount::where('fee_category_id',$fee_category_id)->delete();
            $countClass=count($request->class_id);


                for($i=0; $i < $countClass ; $i++){
                    $fee_amount=new FeeCategoryAmount();
                    $fee_amount->fee_category_id=$request->fee_category_id;
                    $fee_amount->class_id=$request->class_id[$i];
                    $fee_amount->amount=$request->amount[$i];
                    $fee_amount->save();

                }
        }

        session()->flash('success',' class update success');
        return redirect()->route('setups.fee.amount.view');

    }


   public function details($fee_category_id){
       $data['editData']=FeeCategoryAmount::where ('fee_category_id',$fee_category_id)->orderBy('class_id','asc')->get();


       return view('backend.setup.fee_amount.details-fee-amount',$data);

   }



    public function delete($id){

        $data=FeeCategory::find($id);
        $data->delete();



        session()->flash('success', 'Logo has deleted Successfully');
        return redirect()->route('setups.fee.amount.view');
    }

}
