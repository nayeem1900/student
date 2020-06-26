<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoticeController extends Controller
{
    public function view(){


        $data['allData']=Notice::all();


        return view ('backend.notice.view-notice', $data);


    }


    public function add(){

        return view('backend.notice.add-notice');

    }

    public function store(Request $request){


        $data =new Notice();
        $data->created_by=Auth::user()->id;
        if($request->file('image')){

            $file=$request->file('image');
            @unlink(public_path('upload/notice_images/'.$data->image));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/notice_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        session()->flash('success',' Logo update success');
        return redirect()->route('notices.view');
    }

    public function edit($id){

        $editData=Notice::find($id);
        return view('backend.notice.edit-notice',compact('editData'));
    }


    public function update(Request $request,$id){

        $data =Notice::find($id);
        $data->updated_by=Auth::user()->id;
        if($request->file('image')){
            $file=$request->file('image');
            @unlink(public_path('upload/notice_images/'.$data->image));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/notice_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        session()->flash('success',' Logo update success');
        return redirect()->route('notices.view');


    }


    public function delete($id){

        $notice=Notice::find($id);

        if(! is_null($notice)){
            //if it is parent Brand delete sub Brand


            if (file_exists('public/upload/notice_images/'.$notice->image) AND! empty($notice->image))
            {
                unlink('public/upload/notice_images/'.$notice->image);
            }

            $notice->delete();
        }

        session()->flash('success', 'Logo has deleted Successfully');
        return redirect()->route('notices.view');
    }
}
