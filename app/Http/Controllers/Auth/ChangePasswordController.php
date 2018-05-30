<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class ChangePasswordController extends Controller
{
    /**
     * Show the application password update form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.passwords.change');
    }

    public function update(Request $request)
    {

    }
}
