<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Logo;

class LogoController extends Controller
{


    public function view(){
        $data['countLogo']=Logo::count();

        $data['allData']=Logo::all();


        return view ('backend.logo.view-logo', $data);


    }


    public function add(){

        return view('backend.logo.add-logo');

    }

    public function store(Request $request){


        $data =new Logo();
        $data->created_by=Auth::user()->id;
        if($request->file('image')){

            $file=$request->file('image');
            @unlink(public_path('upload/user_images/'.$data->image));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/logo_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        session()->flash('success',' Logo update success');
        return redirect()->route('logos.view');
    }

    public function edit($id){

        $editData=Logo::find($id);
        return view('backend.logo.edit-logo',compact('editData'));
    }


    public function update(Request $request,$id){

        $data =Logo::find($id);
        $data->updated_by=Auth::user()->id;
        if($request->file('image')){
            $file=$request->file('image');
            @unlink(public_path('upload/logo_images/'.$data->image));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/logo_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        session()->flash('success',' Logo update success');
        return redirect()->route('logos.view');


    }


    public function delete($id){

        $logo=Logo::find($id);

        if(! is_null($logo)){
            //if it is parent Brand delete sub Brand


            if (file_exists('public/upload/logo_images/'.$logo->image) AND! empty($logo->image))
            {
                unlink('public/upload/logo_images/'.$logo->image);
            }

            $logo->delete();
        }

        session()->flash('success', 'Logo has deleted Successfully');
        return redirect()->route('logos.view');
    }


}
