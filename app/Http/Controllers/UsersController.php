<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function search(){
        return view('users.search');
    }
    public function registration()//ユーザー登録
        {
            return view('users.register');
        }
    public function register(Request $request)
    {
        // ユーザー作成処理
    }

}
