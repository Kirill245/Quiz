<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
     public function __construct()
     {
         $this->middleware('auth');
     }
     
     public function store(Request $request){
         $question = new Question;
         $question->questionnaire_id = $request->input('q_id');
         $question->question_name = $request->input('q_name');
         $question->question_type = $request->input('q_type');
         $question->choices = $request->input('choices');
         $question->answer = $request->input('q_ans');
         $question->save();
     }
 
     public function update(Request $request, $id){
         $question = Question::find($id);
         $question->question_name = $request->input('q_name');
         $question->question_type = $request->input('q_type');
         $question->choices = $request->input('choices');
         $question->answer = $request->input('q_ans');
         $question->save();
     }
 
     public function destroy($id){
         Question::destroy($id);
     }
}
