<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Post;
use Illuminate\Http\Request;
use App\Models\Problem;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request as FacadesRequest;
use App\Models\question;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Question\Question as QuestionQuestion;

class QuestionsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $data = DB::table('questions')
            ->where('category',$request->category)
            ->get();

        return view('questions', ['problems' => $data]);
    }

}
