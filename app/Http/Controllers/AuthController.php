<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function doRegisterUser(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'min:8', 'same:confirm'],
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/login');
    }

    public function doLoginUser(Request $request){
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $token = Auth::getRecallerName();
            return redirect('/');
        } else {
            $errors = ValidationException::withMessages([
                'login' => ['Invalid login information, try again'],
            ]);
            throw $errors;
        }
        return redirect('/');

    }
}
