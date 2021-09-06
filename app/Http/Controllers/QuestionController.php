<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\question;
use App\Models\comment;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{

    public function getQuesCom(Request $request)
    {

        $ques = DB::table('questions')
            ->where('question_id', $request->questionid)
            ->get();

        $com = DB::table('comments')
            ->where('question_id', $request->questionid)
            ->get();
        return view('question', ['problem' => $ques, 'comment' => $com]);
    }
    
    public function store(Request $request)
    {
        
        switch ($request->input('action')) {
            case 'ask':
                $question = new Question;
                $question['user_id'] = Auth::user()->id;
                $question['user_name'] = Auth::user()->name;
                $question->category = $request['category'];
                $question->question_title = $request['question'];
                $question->question_description = $request['description'];
                $question->code= $request['code'];
                $question->save();

                $questionid = DB::getPdo()->lastInsertId();
                return redirect()->route('question', ['questionid' => $questionid]);
                break;

            case 'answer':
                $comment = new Comment;
                $comment['user_id'] = Auth::user()->id;
                $comment['user_name'] = Auth::user()->name;
                $comment->question_id = $request['questionid'];

                $questionid = $comment->question_id;
                $myquery = DB::table('questions')->where('question_id', $questionid)->select('category')->pluck('category')->first();
                $comment->category = $myquery;
                $comment->comment = $request['comment'];
                $comment->code = $request['code'];
                $comment->save();
                return redirect()->route('question', ['questionid' => $questionid]);
                break;
        }
    }
}
