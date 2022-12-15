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
      
        $request->session()->put('successMessage', 'Question successfully added');

        return redirect('questions');
     }

     public function show(){
        $qs = question::all();

        return view('questions')->with(['questions' => $qs]);
     }


     public function update(Request $request){
      $validate=$request->validate([
          'question'=>'required',
          'optA'=>'required',
          'optB'=>'required',
          'optC'=>'required',
          'optD'=>'required',
          'ans'=>'required',
          'id'=>'required',

      ]);
      $q = question::find($request->id);

      $q -> question=$request->question;
      $q -> a=$request->optA;
      $q -> b=$request->optB;
      $q -> c=$request->optC;
      $q -> d=$request->optD;
      $q -> ans=$request->ans;

      $q->save();

      $request->session()->put('successMessage', 'Question successfully updated');

      return redirect('questions');
   }

   public function delete(Request $request){

      $validate=$request->validate([
          'id'=>'required',

      ]);

      question::where('id', $request->id)->delete();

      $request->session()->put('successMessage', 'Question successfully deleted');

      return redirect('questions');
   }

   public function startquiz(){

      session()->put('nextq', '1');
      session()->put('wrongans', '0');
      session()->put('correctans', '0');

      $q=question::all()->first();

      return view('answer') -> with(['question'=>$q]);
   }

   public function submitans(Request $request){

      $nextq=session()->get('nextq');
      $wrongans=session()->get('wrongans');
      $correctans=session()->get('correctans');

      $validate=$request->validate([
         'ans'=>'required',
         'dbans'=>'required',
     ]);

     $nextq +=1;

     if($request->dbans == $request->ans){

      $correctans+=1;
     }
     else{
      $wrongans+=1;
     }

     session()->put('nextq', $nextq);
     session()->put('wrongans', $wrongans);
     session()->put('correctans', $correctans);

     $i=0;

     $questions=question::all();

     foreach($questions as $question){

      $i++;

      if($questions->count() < $nextq){
         return view('finish');
      }

      if($i==$nextq){
         return view('answer')->with(['question' => $question]);
      }
     }

   }

}
