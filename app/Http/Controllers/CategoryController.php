<?php

namespace App\Http\Controllers;

use App\category;
use App\complain;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function get(){
        $value= category::all();
        $c=0;
        return view("admin.category",compact('value','c'));
    }
    public function submitdata(Request $request){
        $cate= new category();
        $cate->name=$request->input("category");
        $cate->count=0;
        $cate->save();
        return redirect('/category')->with("success", "Category added Successfully");
    }
    public function submitchange(Request $request){
        $cate=category::find($request->input('id'));
        $cate->name=$request->input("category");
        //$cate->count=0;
        $cate->save();
        return redirect('/category')->with("success", "Category Updated Successfully");
    }
    public function delete_cate($id){
        $cate=category::find($id);
        $cate->delete();
        return redirect('/category')->with("success", "Category Deleted Successfully");

    }
    public function process($id){
        $cate=complain::find($id);
        $cate->status="Processing";
        $cate->save();
        return redirect('/view_complains/'.$id)->with("success", "Category Deleted Successfully");

    }
    public function done($id){
        $cate=complain::find($id);
        $cate->status="Done";
        $cate->save();
        return redirect('/view_complains/'.$id)->with("success", "Category Deleted Successfully");

    }
}
