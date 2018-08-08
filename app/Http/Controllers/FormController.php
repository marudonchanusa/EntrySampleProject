<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Member;

class FormController extends Controller
{
    /*
     * 入力画面
     *
     * @return sring
     */
    public function input() {
        return view('form.input');
    }

    /**
     * 完了画面
     *
     * @return string
     */
    public function save(PostRequest $request)
    {
        //データベース登録
        $member = new Member;
        $member->name = $request->name;
        $member->tel = $request->tel;
        $member->email = $request->email;
        $member->gender = $request->gender;
        $member->content = $request->content;
        $member->save();

        //リロードによる二重送信防止
        $request->session()->regenerateToken();

        return view('form.complete');
    }
}
