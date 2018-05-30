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

    /**
     * Update the user password in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|min:6|same:new_password',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        if(\Hash::check($request->current_password, \Auth::user()->password)){
            $user = User::findOrFail(\Auth::user()->id);
            $user->password = \Hash::make($request->new_password);
            $user->save();
            \Session::flash('success-message', '現在のパスワードがレコードと一致しません');
            return redirect()->back();
        }
        else
        {
            \Session::flash('warning-message', '現在のパスワードがレコードと一致しません');
            return redirect()->back();
        }
    }
}