<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVController extends Controller
{
    public function infoInput(Request $request)
    {
        if ($request->post()) {
            //todo write some code here
        } else {
            return view('input');
        }
    }

    public function validateText(Request $request)
    {
        if ($request->get('text')) {
            return $request->get('text') . 'validated';
        }
    }
}
