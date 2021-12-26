<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

    public function userRegister(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'username' => Str::Slug($request->name),
            'email' => $request->email,
            'password' => Hash::make('isdummy'),
        ]);

        return back()->with('success', 'Account created successfully, please visit you email address for login details.');

    }

    public function dashboard()
    {
        return view('customer.dashboard');
    }

    public function profile()
    {
        $title = "Member Area";
        $user = auth()->user();
        return view('customer.profile', compact('title', 'user'));
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Name is required'
        ]);

        $user = auth()->user();
        $user->update([
            'name' => $request->name,
            'username' => Str::Slug($request->name),
            'phone' => $request->phone,
            'vat_number' => $request->vat_number,
            'state' => $request->state,
            'address' => $request->address,
            'city' => $request->city,
            'zip' => $request->zip,
            'country' => $request->country
        ]);

        return back()->with('success', 'Profile Updated Successfully.');
    }
}
