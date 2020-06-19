<?php

namespace App\Http\Controllers;

use App\admin;
use App\Http\Middleware\student;
use App\userrecord;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;


class StudentController extends Controller
{
    //
    public function activate(Request $request)
    {
        $email = $request->input('email');
        $email1 = explode('@', $email);

        if ($email1[1] == "diu.edu.bd") {
            $std = \App\student::where([
                ['email', '=', $email]
            ])->get();
            $cc = count($std);
            if ($cc > 0) {
                $strlen = 5;
                $str = "1234567890987654321";
                $rand = substr(str_shuffle($str), 0, $strlen);
                //     $message = "Hi " . $request->input('name') . ' ,';
                $message = "\nYour Login Password is: " . $rand;

                Mail::to($request->input('email'))->send(new SendMail('Email Verification', $message));
                $std = new userrecord();
                $std->email = $email;
                $std->password = $rand;
                $std->save();
                return redirect('/')->with("success", "Login to Panel!!!!! Check Your varsity email. Password is send to your mail");

            } else {
                return redirect('/activeAccount')->with("success", "You data is not recorded. Contact To Admin!");

            }

        } else {
            return redirect('/activeAccount')->with("success", "You can not Provide Your Versity Email..Enter Your Varsity Provided Email!!!!!");
        }
    }

    public function activate1(Request $request)
    {
        $email = $request->input('email');
        $email1 = explode('@', $email);
        if ($email1[1] == "diu.edu.bd") {
            $std = admin::where([
                ['email', '=', $email]
            ])->get();

            foreach ($std as $st) {
                $s = admin::find($st['id']);
                $s->delete();
            }

            $strlen = 5;
            $str = "1234567890987654321";
            $rand = substr(str_shuffle($str), 0, $strlen);
            //     $message = "Hi " . $request->input('name') . ' ,';
            $message = "\nYour Login Password is: " . $rand;

            Mail::to($request->input('email'))->send(new SendMail('Email Verification', $message));
            $std = new admin();
            $std->email = $email;
            $std->password = $rand;
            $std->save();
            return redirect('/admin')->with("success", "Login to Panel!!!!! Password is given to your varsity email.");

        } else {
            return redirect('/forget')->with("success", "You can not Provide Your Versity Email..Enter Your Varsity Provided Email!!!!!");
        }
    }

    public function activate2(Request $request)
    {
        $email = $request->input('email');
        $email1 = explode('@', $email);
        if ($email1[1] == "diu.edu.bd") {
            $std = \App\student::where([
                ['email', '=', $email]
            ])->get();
            $cc = count($std);
            if ($cc > 0) {
                $std = userrecord::where([
                    ['email', '=', $email]
                ])->get();

                foreach ($std as $st) {
                    $s = userrecord::find($st['id']);
                    $s->delete();
                }

                $strlen = 5;
                $str = "1234567890987654321";
                $rand = substr(str_shuffle($str), 0, $strlen);
                //     $message = "Hi " . $request->input('name') . ' ,';
                $message = "\nYour Login Password is: " . $rand;

                Mail::to($request->input('email'))->send(new SendMail('Email Verification', $message));
                $std = new userrecord();
                $std->email = $email;
                $std->password = $rand;
                $std->save();
                return redirect('/')->with("success", "Login to Panel!!!!!");
            } else {
                return redirect('/activeAccount')->with("success", "You data is not recorded. Contact To Admin!");
            }

        } else {
            return redirect('/forget_stu')->with("success", "You can not Provide Your Versity Email..Enter Your Varsity Provided Email!!!!!");
        }
    }

    public function get(Request $request)
    {
        $pass = $request->session()->get('user');
        return view("student.admin", compact("pass"));
    }

    public function submitchange(Request $request)
    {
        $change = userrecord::find($request->session()->get("id"));
        if ($request->input("passw") == $request->session()->get("pass")) {
            if ($request->input("passw1") == $request->input("passw2")) {
                $change->password = $request->input("passw1");
                $request->session()->put('pass', $request->input("passw1"));
                $change->save();
                return redirect("/change_password")->with("success", "Change SUccessfully");
            } else {
                return redirect("/change_password")->with("error", "Password not matched");
            }

        } else {
            return redirect("/change_password")->with("error", "Password not matched");
        }
    }
}
