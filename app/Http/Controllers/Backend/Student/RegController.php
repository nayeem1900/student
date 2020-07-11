<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use App\Model\AssignStudent;
use App\Model\DiscountStudent;
use App\Model\StudentClass;
use App\Model\StudentGroup;
use App\Model\StudentShift;
use App\Model\Year;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegController extends Controller
{
    public function view(){

        $data['allData']=AssignStudent::all();


        return view ('backend.student.student_reg.view-student', $data);


    }


    public function add(){

        $data['years']=Year::all();
        $data['classes']=StudentClass::all();
        $data['groups']=StudentGroup::all();
        $data['shifts']=StudentShift::all();

        return view('backend.student.student_reg.add-student',$data);

    }

    public function store(Request $request){

        DB::transaction(function ()use($request){
    $chekYear=Year::find($request->year_id)->name;
    $student=User::where('usertype','student')->orderBy('id','DESC')->first();
    if($student==null){
        $firstReg=0;
        $studentId=$firstReg+1;
        if($studentId<10){
            $id_no='000'.$studentId;

        }elseif ($studentId<100){

            $id_no='00'.$studentId;
        }elseif ($studentId<1000){
            $id_no='0'.$studentId;
        }

    }else{

        $student=User::where('usertype','student')->orderBy('id','DESC')->first()->id;
        $studentId=$student+1;
        if($studentId<10){
            $id_no='000'.$studentId;
        }elseif ($studentId<100){

            $id_no='00'.$studentId;
        }elseif ($studentId<1000){
            $id_no='0'.$studentId;
        }
    }
        $final_id_no=$chekYear.$id_no;
        $user=new User();
        $code=rand(0000,9999);
        $user->code=$code;
        $user->password= bcrypt($code);
        $user->usertype='student';
        $user->id_no=$final_id_no;
        $user->name=$request->name;
        $user->fname=$request->fname;
        $user->mname=$request->mname;
        $user->mobile=$request->mobile;
        $user->address=$request->address;
        $user->gender=$request->gender;
        $user->religion=$request->religion;
        $user->dob=date('Y-m-d',strtotime($request->dob));

            if($request->file('image')){

                $file=$request->file('image');
                $filename=date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/student_images'),$filename);
                $user['image']=$filename;
            }
        $user->save();

        $assign_student=new AssignStudent();
        $assign_student->student_id=$user->id;
        $assign_student->year_id=$request->year_id;
        $assign_student->class_id=$request->class_id;
        $assign_student->group_id=$request->group_id;
        $assign_student->shift_id=$request->shift_id;

        $assign_student->save();
        $discount_student=new DiscountStudent();
        $discount_student->assign_student_id-=$assign_student->id;
        $discount_student->discount=$request->discount;
        $discount_student->fee_category_id='1';
        $discount_student->save();


        });

        return redirect()->route('students.registration.view')->with('success', 'Data Insert successfull');
    }

    public function edit($id){

        $editData=Slider::find($id);
        return view('backend.sliders.edit-slider',compact('editData'));
    }


    public function update(Request $request,$id){

        $data =Slider::find($id);
        $data->updated_by=Auth::user()->id;
        if($request->file('image')){
            $file=$request->file('image');
            @unlink(public_path('upload/slider_images/'.$data->image));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/slider_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        session()->flash('success',' Logo update success');
        return redirect()->route('sliders.view');


    }


}
