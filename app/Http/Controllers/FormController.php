<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function loginFormAction()
    {
        return view('form/login');
    }

    public function registerFormAction()
    {
        return view('form/register');
    }
}
