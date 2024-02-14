<?php

namespace App\Http\Controllers;

use App\Models\PostAttendance;
use Illuminate\Http\Request;
use App\Models\PostCourt;
use App\Models\RegistNewCourt;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class PostAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $elected_courts = PostCourt::all();
        $registed_courts = RegistNewCourt::all();

        return view('attendance.post-attendance')->with([
            'elected_courts' => $elected_courts,
            'registed_courts' => $registed_courts,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // フォームから送信されたデータを取得
            $attendFlgs = $request->input('attend_flg');
            $attendCourts = $request->input('attendances');
            $userId = $request->input('user_id');

            for ($count = 0; $count < count($attendFlgs); $count++) {
                // バリデーションを追加
                $validator = Validator::make([
                    'user_id' => $userId[$count],
                    'elected_court_id' => $attendCourts[$count],
                    'attend_flg' => $attendFlgs[$count],
                ], [
                    'user_id' => 'required',
                    'elected_court_id' => 'required',
                    'attend_flg' => 'required',
                ]);

                // バリデーションが失敗した場合はエラーメッセージを取得し、リダイレクト
                if ($validator->fails()) {
                    return back()->with('error', '入力が正しくありません。')->withErrors($validator);
                }

                $validated['user_id'] = $userId[$count];
                $validated['elected_court_id'] = $attendCourts[$count];
                $validated['attend_flg'] = $attendFlgs[$count];

                $postAttendance = PostAttendance::create($validated);
            }

            return back()->with('message', '保存しました');
        } catch (\Exception $errors) {
            return back()->with('error', 'エラーが発生しました: ' . $errors->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show($user_id)
    {
        $postAttendance = PostAttendance::all($user_id);
        return view('attendance.show-attendance', compact('postAttendance'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostAttendance $postAttendance)
    {
        return view('attendance.edit-attendance', compact('postAttendance'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostAttendance $postAttendance)
    {
        try {
            // フォームから送信されたデータを取得
            $attendFlgs = $request->input('attend_flg');
            $attendCourts = $request->input('attendances');
            $userId = $request->input('user_id');

            for ($count = 0; $count < count($attendFlgs); $count++) {
                // バリデーションを追加
                $validator = Validator::make([
                    'user_id' => $userId[$count],
                    'elected_court_id' => $attendCourts[$count],
                    'attend_flg' => $attendFlgs[$count],
                ], [
                    'user_id' => 'required',
                    'elected_court_id' => 'required',
                    'attend_flg' => 'required',
                ]);

                // バリデーションが失敗した場合はエラーメッセージを取得し、リダイレクト
                if ($validator->fails()) {
                    return back()->with('error', '入力が正しくありません。')->withErrors($validator);
                }

                $validated['user_id'] = $userId[$count];
                $validated['elected_court_id'] = $attendCourts[$count];
                $validated['attend_flg'] = $attendFlgs[$count];

                $postAttendance->update($validated);
            }

            return back()->with('message', '更新しました');
        } catch (\Exception $errors) {
            return back()->with('error', 'エラーが発生しました: ' . $errors->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostAttendance $postAttendance)
    {
        //
    }
}