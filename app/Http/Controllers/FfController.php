<?php

namespace App\Http\Controllers;

use App\Models\car;
use App\Models\school;

class FfController extends Controller
{
    //
    function ff(){
        
            $cars=car::with('not')->get();
            return view('welcome',compact('cars'));
        }
        function ss(){
        
             $schools=school::with('student')->get();
             return view('ss',compact('schools'));
            }
    
}