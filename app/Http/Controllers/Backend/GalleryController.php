<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{

    public function view(){


        $data['allData']=Gallery::all();


        return view ('backend.gallery.view-gallery', $data);


    }


    public function add(){

        return view('backend.gallery.add-gallery');

    }

    public function store(Request $request){


        $data =new Gallery();
        $data->created_by=Auth::user()->id;
        if($request->file('image')){

            $file=$request->file('image');
            @unlink(public_path('upload/gallery_images/'.$data->image));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/gallery_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        session()->flash('success',' Logo update success');
        return redirect()->route('gallerys.view');
    }

    public function edit($id){

        $editData=Gallery::find($id);
        return view('backend.gallery.edit-gallery',compact('editData'));
    }


    public function update(Request $request,$id){

        $data =Gallery::find($id);
        $data->updated_by=Auth::user()->id;
        if($request->file('image')){
            $file=$request->file('image');
            @unlink(public_path('upload/gallery_images/'.$data->image));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/gallery_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        session()->flash('success',' Logo update success');
        return redirect()->route('gallerys.view');


    }


    public function delete($id){

        $gallery=Gallery::find($id);

        if(! is_null($gallery)){
            //if it is parent Brand delete sub Brand


            if (file_exists('public/upload/logo_images/'.$gallery->image) AND! empty($gallery->image))
            {
                unlink('public/upload/logo_images/'.$gallery->image);
            }

            $gallery->delete();
        }

        session()->flash('success', 'Logo has deleted Successfully');
        return redirect()->route('gallerys.view');
    }

}
