<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
     public function add(Request $request){
        $validate=$request->validate([
            'question'=>'required',
            'optA'=>'required',
            'optB'=>'required',
            'optC'=>'required',
            'optD'=>'required',
            'ans'=>'required',

        ]);
        $q = new question();

        $q -> question=$request->question;
        $q -> a=$request->optA;
        $q -> b=$request->optB;
        $q -> c=$request->optC;
        $q -> d=$request->optD;
        $q -> ans=$request->ans;

        $q->save();

        Session::put('successMessage', "Question successfully added");

        return redirect('questions');
     }

     public function show(){
        $qs = question::all();

        return view('questions')->with(['questions' => $qs]);
     }

}
