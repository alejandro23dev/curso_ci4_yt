<?php

namespace App\Controllers;

class Authentication extends BaseController
{
    public function login()
    {
        return view('authentication/login');
    }
}
