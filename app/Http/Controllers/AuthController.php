<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return Redirect::route('homepage');
        } else
            return Redirect::back();

    }

    public function logout()
    {
        Auth::logout();
        return Redirect::route('homepage');

    }

    public function authregister(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $rules = [
            'password' => 'required|min:6',
            'password2' => 'required|min:6|same:password',
        ];

        $messages = [
            'password2.same' => 'Parolalar eşleşmedi',
            'password.min' => 'Parola en az 6 hane içermelidir.',
            'password2.min' => 'Parola en az 6 hane içermelidir.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        } else {

            try {
                $user = new User();
                $user->email = $email;
                $user->password = Hash::make($password);
                $user->save();
                $credentials = $request->only('email', 'password');
                if (Auth::attempt($credentials)) {
                    return Redirect::route('homepage');
                } else
                    return Redirect::back();

            } catch (\Exception $e) {
                $errorCode = $e->errorInfo[1];
                if ($errorCode == 1062) {
                    return back()->withInput()->withErrors([$user->email ." Bu Email Kullanılıyor"]);

                }
            }


        }
    }
}
