<?php

namespace App\Http\Controllers;

use App\admin;
use App\category;
use App\complain;
use App\student;
use App\userrecord;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function submitlogin(Request $request)
    {
        session_start();
        $email1 = $request->get('email');
        $pass = $request->get('password');
        $c = 0;
        $details = admin::where('email', $email1)->get();

        foreach ($details as $value) {
            if ($email1 == $value['email'] && $pass == $value['password']) {
                $request->session()->put('user', $email1);
                $request->session()->put('pass', $pass);
                $request->session()->put('id', $value['id']);
                /*$request->session()->put('rule', $value['userroles']);*/
                $_SESSION['ee'] = $email1;
                $_SESSION['id'] = $value['id'];

                return redirect("/dash");
                $c = 1;
            }
        }
        if ($c == 0) {

            $request->session()->put('user', $email1);
            $request->session()->put('pass', $pass);
            $request->session()->put('id', $c);

            return redirect("/admin");


        }


    }

    public function get4()
    {
        $value = student::all();
        return view("admin.adminlist", compact("value"));
    }

    public function get5($id)
    {
        $stu = student::find($id);

        if($stu["approved"]==1){

            $stu->approved=0;
        }else{

            $stu->approved=1;
        }

        $stu->save();
        return redirect("/studentlist");
    }


    public function get()
    {
        $value =count(category::all());
        $value1 =count(complain::where([
            ['status','=',"Pending"]
        ])->get());
        $value2 =count(complain::where([
            ['status','=',"Processing"]
        ])->get());
        $value3 =count(complain::where([
            ['status','=',"Done"]
        ])->get());
        $value4 =count(complain::all());
        return view("admin.index",compact('value','value1','value2','value3','value4'));
    }

    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect("/admin");
    }


    public function get1(Request $request)
    {
        $pass = $request->session()->get('user');
        return view("admin.admin", compact("pass"));
    }

    public function submitchange(Request $request)
    {
        $change = admin::find($request->session()->get("id"));
        if ($request->input("passw") == $request->session()->get("pass")) {
            if ($request->input("passw1") == $request->input("passw2")) {
                $change->password = $request->input("passw1");
                $request->session()->put('pass', $request->input("passw1"));
                $change->save();
                return redirect("/change_password_admin")->with("success", "Change SUccessfully");
            } else {
                return redirect("/change_password_admin")->with("error", "Password not matched");
            }

        } else {
            return redirect("/change_password_admin")->with("error", "Password not matched");
        }
    }


}
