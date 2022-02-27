<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function index(){
        $data =User::paginate(8);
        return view('admin',compact('data'));
        
    }

    public function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect('admin/list');

    }

    public function showData($id){
        $data = User::find($id);
        return view('edit',['data'=>$data]);
    }

    public function update(Request $req){
        $data = User::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->roles = $req->roles;
        $data->save();
        return redirect('admin/list');

    }



}
