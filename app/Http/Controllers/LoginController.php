<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class LoginController extends BaseController
{
    public function show()
    {
        return view('login.show');
    }
}