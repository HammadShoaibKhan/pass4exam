<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function verifyUserExists(Request $request)
    {
        $response = 'not-exists';
        $email = $request->email;
        if (User::where('email', $email)->exists() && $email != 'admin@certsidea.com') {
            if (User::where('email', $email)->value('status') == 1) {
                $response = 'exists-active';
            } else {
                $response = 'exists-disabled';
            }
        }
        return Response()->json($response);
    }

    public function userLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (auth()->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('user.dashboard');
        }
        return back()->with('error', 'Password is not correct');
    }

    public function dashboard()
    {
        return view('customer.dashboard');
    }
}
