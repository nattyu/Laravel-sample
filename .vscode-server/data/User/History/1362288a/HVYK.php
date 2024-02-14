<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistNewCourtController extends Controller
{
    public function create() {
        return view('regist.regist-new-court');
    }
}
