<?php

namespace App\Http\Controllers\Developer\Auth;

use App\Http\Controllers\Controller;
use Developer\Services\AuthServices;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * 登入頁面
     */
    public function index() {
        return view('developer/auth/login');
    }

    /**
     * 登入驗證
     */
    public function auth(Request $loginRequest, AuthServices $authServices)
    {
        $account = $loginRequest->get('account');
        $password = $loginRequest->get('password');

        return $authServices->auth($account, $password);
    }

    /**
     * 登出
     */
    public function logout(AuthServices $authServices)
    {
        return $authServices->logout();
    }
}
