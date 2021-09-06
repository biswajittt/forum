<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthContoller extends Controller
{
    //
    function auth(Request $request){
        $data = $request->input();
        $request->session()->put('user',$data);
        return redirect('forum');
    }

    function flush(Request $req){
        $r = $req->session()->flush();
        return view("home");
    }
}
