<?php

namespace Developer\Services;
use Developer\Repositories\DevelopAdminRepository;

use Auth, Hash, Request;

/**
 * Class LoginAuthServices
 * @package Developer\Services
 */
class AuthServices
{
    /**
     * @return json
     */
    public function login() {
        if ( ! Auth::check()) {
            return view('developer/auth/login');
        } else {
            return redirect('/developer');
        }
    }

    /**
     * @param string $account
     * @param string $password
     *
     * @return json
     */
    public function auth($account, $password)
    {
        if (Auth::attempt(['account' => $account, 'password' => $password, 'status' => DevelopAdminRepository::IS_ACTIVE], true)) {
            $user = Auth::user();
            $user->nowLoginIp = Request::ip();
            $user->login_time = date("Y-m-d H:i:s");
            $user->save();

            return json_encode(['status' => 'success', 'url' => '/developer']);
        } else {
            return json_encode(['status' => 'error', 'msg' => 'account or password incorrect']);
        }
    }

    /**
     *
     * @return redirect url
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/developer/login');
    }
}