<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\crudpra;
class Practice extends Controller
{
    //
    public function index(){
        $data = crudpra::all();
        return view('index',compact('data'));
    }
    public function addpost(){
        return view('addpost');
    }
    public function postdata(Request $request){
        $result = crudpra::create($request->all());
        if($result){
          return  redirect()->route('index');
        }
    }
    public function edit($id){
        $edit = crudpra::find($id);
        return view('edit',compact('edit'));
    }
    public function update($id,Request $request){
        $update = crudpra::find($id);
        $result = $update->update($request->all());
        if($result){
            return redirect()->route('index');
        }
    }
    public function delete($id){
        $del = crudpra::find($id);
        $del = $del->delete($id);
        if($del){
            return redirect()->route('index');  
        }
    }
}
