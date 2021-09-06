<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserQuesController extends Controller
{
    public function userQues()
    {
        
        $id = Auth::id();

        $data = DB::table('questions')
            ->where('user_id',$id)
            ->get();

        return view('userdata', ['userquestions' => $data]);
    }

    public function deleted($id)
    {
        DB::delete('DELETE FROM questions WHERE question_id = ?', [$id]);
        return redirect()->back();
    }
}
