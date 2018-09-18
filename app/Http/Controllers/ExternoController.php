<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExternoController extends Controller
{
    function loginPage()
    {
        return view('controle-externo.login.login');
    }
}
