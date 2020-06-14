<?php

namespace App\Http\Controllers;

use App\category;
use App\complain;
use App\student;
use App\userrecord;
use Illuminate\Http\Request;

class UserrecordController extends Controller
{
    //
    public function submitlogin(Request $request)
    {
        session_start();
        $email1 = $request->get('email');
        $pass = $request->get('password');
        $c = 0;
        $details = userrecord::where('email', $email1)->get();

        foreach ($details as $value) {
            if ($email1 == $value['email'] && $pass == $value['password']) {
                $request->session()->put('user', $email1);
                $request->session()->put('pass', $pass);
                $request->session()->put('id', $value['id']);
                /*$request->session()->put('rule', $value['userroles']);*/
                $_SESSION['ee'] = $email1;
                $_SESSION['id'] = $value['id'];
                $vvv= student::where([
                    ["email","=", $value['email'] ]
                ])->get();
                //$val=new student();
                foreach ($vvv as $vv){
                    $val=student::find($vv['id']);
                }
                if ($val['approved'] == "1") {
                    return redirect("/index");
                } else {
                    return redirect("/");
                }

                $c = 1;
            }
        }
        if ($c == 0) {

            $request->session()->put('user', $email1);
            $request->session()->put('pass', $pass);
            $request->session()->put('id', $c);

            return redirect("/");


        }


    }

    public function get(Request $request)
    {
        $value =count(category::all());
        $value1 =count(complain::where([
            ['user','=',$request->session()->get('user')]
        ])->get());
        $value2 =count(complain::all());
        return view("student.index",compact('value','value1','value2'));
    }


    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect("/");
    }
}
