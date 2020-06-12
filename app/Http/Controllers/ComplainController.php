<?php

namespace App\Http\Controllers;

use App\category;
use App\complain;
use App\student;
use Illuminate\Http\Request;

class ComplainController extends Controller
{
    //
    public function get()
    {
        $value = category::all();
        return view("student.projectadd", compact("value"));
    }

    public function submitdata(Request $request)
    {
        $cate = new complain();
        $cate->date = $request->input("date");
        $cate->cate = $request->input("type");
        $cate->semester = $request->input("sname");
        $cate->title = $request->input("title");
        $cate->description = $request->input("des");
        $cate->user = $request->session()->get("user");
        $cate->status = "Pending";
        $cate->save();
        return redirect('/complain_make')->with("success", "Complain is Added");
    }
    public function submitdata1(Request $request)
    {
        $cate = complain::find($request->input('id'));

        $cate->title = $request->input("title");
        $cate->description = $request->input("des");
        $cate->save();
        return redirect('/my_complain')->with("success", "Complain is Updated!!");
    }
    public function get1(Request $request)
    {
        $value = complain::where([
            ["user", "=", $request->session()->get("user")]
        ])->get();
        return view("student.preview", compact("value"));
    }

    public function get2($id, Request $request)
    {
        $value = complain::find($id);

        $value1 = student::where([
            ["email", "=", $request->session()->get("user")]
        ])->get();
        $i = 0;
        foreach ($value1 as $val) {
            $i = $val['id'];
        }
        $value1 = student::find($i);
        return view("student.profile", compact("value", "value1"));
    }

    public function get3($id, Request $request)
    {
        $value = complain::find($id);
        return view("student.edit",compact("value"));
    }
    public function delete_cate($id){
        $cate=complain::find($id);
        $cate->delete();
        return redirect('/my_complain')->with("success", "Category Deleted Successfully");

    }
    public function get4( )
    {
        $c=0;
        $value = complain::all()->sortByDesc("id");;
        return view("student.adminlist",compact("value","c"));
    }

    public function get5($id, Request $request)
    {
        $value = complain::find($id);

        $value1 = student::where([
            ["email", "=", $request->session()->get("user")]
        ])->get();
        $i = 0;
        foreach ($value1 as $val) {
            $i = $val['id'];
        }
        $value1 = student::find($i);
        return view("student.profile1", compact("value", "value1"));
    }
}
