<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tests;
use Illuminate\Support\Facades\Auth;

class TestsController extends Controller
{
    function view(){
        $userid = Auth::id();

        return view('tests', [
            'tests' => Tests::where('userid', $userid)
        ]);
    }

    function add(Request $request){
        $this->validate($request, [
            'question' => 'required|min:3|max:255',
            'a' => 'required|max:100',
            'b' => 'required|max:100',
            'c' => 'required|max:100',
            'd' => 'required|max:100',
            'answer'=> 'required'
            ]);

        dd($request->all());
    }
}
