<?php

namespace App\Http\Controllers;

use App\Models\PostCourt;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RegistNewCourt;
use App\Models\PostAttendance;

class PostCourtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postCourts_1 = PostCourt::orderBy('elected_date', 'asc')->orderBy('start_time', 'asc')->get();
        $postCourts_2 = PostCourt::orderBy('elected_date', 'asc')->orderBy('start_time', 'asc')->get();
        $users = User::all();
        $attendances = PostAttendance::all();
        return view('court.index-court')
            ->with([
                'users' => $users,
                'postCourts_1' => $postCourts_1,
                'postCourts_2' => $postCourts_2,
                'attendances' => $attendances
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $registed_courts = RegistNewCourt::all();
        $start_times = ['7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00'];
        $end_times = ['9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00'];

        return view('court.post-court')->with([
            'registed_courts' => $registed_courts,
            'start_times' => $start_times,
            'end_times' => $end_times,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'court_id' => 'required',
            'court_number' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'elected_date' => 'required',
        ]);

        $validated['user_id'] = auth()->id();

        $postCourt = PostCourt::create($validated);
        return back()->with('message', '保存しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(PostCourt $postCourt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostCourt $postCourt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostCourt $postCourt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostCourt $postCourt)
    {
        //
    }
}
