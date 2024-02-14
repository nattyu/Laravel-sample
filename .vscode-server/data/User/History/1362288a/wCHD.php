<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistNewCourt;

class RegistNewCourtController extends Controller
{
    public function create() {
        return view('regist.regist-new-court');
    }

    public function store(Request $request) {
        $newCourt = RegistNewCourt::create([
            'court_name' => $request->court_name,
            'address' => $request->address
        ]);

        $request->session()->flash('message', '保存しました');
        return back();
    }
}
