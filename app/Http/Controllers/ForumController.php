<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    function getdata()
    {
        $cat = DB::table('category')->get();
        return view('forum', ['categories' => $cat]);
    }
}
