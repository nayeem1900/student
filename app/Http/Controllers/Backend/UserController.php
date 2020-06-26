<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{

    public function view(){

        $data['allData']=User::all();


return view ('backend.user.view-user', $data);


    }


    public function add(){

      return view('backend.user.add-user');

    }

    public function store(Request $request){

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:users,email',
            'password'=>'required',


        ]);


        $data =new User();
        $data->usertype= $request->usertype;
        $data->name= $request->name;
        $data->email= $request->email;
        $data->password= bcrypt($request->password);
        $data->save();
        session()->flash('success',' Student update success');
        return redirect()->route('users.view');
    }

    public function edit($id){

     $editData=User::find($id);
     return view('backend.user.edit-user',compact('editData'));
    }


    public function update(Request $request,$id){

        $data =User::find($id);
        $data->usertype= $request->usertype;
        $data->name= $request->name;
        $data->email= $request->email;
        $data->save();
        session()->flash('success',' Student update success');
        return redirect()->route('users.view');


    }


    public function delete($id){

$user=User::find($id);

        if(! is_null($user)){
            //if it is parent Brand delete sub Brand


            if (File::exists('upload/users' .$user->image)){
                File::delete('upload/users' .$user->image);
            }

            $user->delete();
        }

        session()->flash('success', 'user has deleted Successfully');
        return back();
    }

}
