<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Model\AssignSubject;
use App\Model\Subject;
use Illuminate\Http\Request;
use App\Model\StudentClass;

class AssignSubjectController extends Controller
{


    public function view(){


        $data['allData']=AssignSubject::all();


        return view ('backend.setup.assign_subject.view-assign-subject',$data);


    }


    public function add(){
        $data['subjects']=Subject::all();
        $data['classes']=StudentClass::all();

        return view('backend.setup.assign_subject.add-assign-subject',$data);
    }

    public function store(Request $request){

        $countSubject=count($request->subject_id);

        if($countSubject != Null){
            for($i=0; $i < $countSubject ; $i++){
                $assign_sub=new AssignSubject();
                $assign_sub->class_id=$request->class_id;
                $assign_sub->subject_id=$request->subject_id[$i];
                $assign_sub->full_mark=$request->full_mark[$i];
                $assign_sub->pass_mark=$request->pass_mark[$i];
                $assign_sub->subjective_mark=$request->subjective_mark[$i];
                $assign_sub->save();

            }
        }

        session()->flash('success',' assign_subject update success');
        return redirect()->route('setups.assign.subject.view');
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
