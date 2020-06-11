<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;

class ComplainController extends Controller
{
    //
    public function get(){
        $value= category::all();
        return view("student.projectadd",compact("value"));
    }
}
