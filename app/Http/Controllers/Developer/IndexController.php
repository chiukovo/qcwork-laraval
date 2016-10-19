<?php

namespace App\Http\Controllers\Developer;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * 後台首頁
     */
    public function index() {
        return view('welcome');
    }
}
