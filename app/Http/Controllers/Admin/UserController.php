<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $title = 'Users';
        $users = User::whereNotIn('email', ['admin@certsidea.com', auth()->user()->email])->orderBy('id', 'DESC')->get();
        return view('admin.users.index', compact('title', 'users'));
    }

    public function create()
    {
        $title = "User";
        return view('admin.users.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required'
        ]);
        $data = [
            'name' => $request->name,
            'username' => Str::Slug($request->name),
            'email' => $request->email,
            'type' => $request->type,
            'status' => $request->status,
            'password' => bcrypt($request->password)
        ];
        User::create($data);
        return back()->with('success', 'User created successfully!');
    }

    public function edit($id = null) {
        if ($id != null && User::where('id', $id)->exists()) {
            $title = 'User';
            $user = User::find($id);
            return view('admin.users.edit', compact('title', 'user'));
        }
        return redirect()->route('admin.users');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ], [
            'name.required' => 'Name is required',
            'password.required' => 'Password is required'
        ]);

        $data = [
            'name' => $request->name,
            'username' => Str::Slug($request->name),
            'type' => $request->type,
            'status' => $request->status
        ];

        if ($request->password != '') {
            $data['password'] = bcrypt($request->password);
        }
        User::find($id)->update($data);
        return back()->with('success', 'User updated successfully');
    }

    public function changeStatus(Request $request)
    {
        User::whereIn('id', $request->user_ids)->update(['status' => $request->status]);
        $users = User::whereNotIn('email', ['admin@certsidea.com', auth()->user()->email])->orderBy('id', 'DESC')->get();
        return view('admin.users.partials.user-listings', compact('users'));
    }

    public function delete(Request $request)
    {
        $user = user::find($request->user_id);
        $user->delete();
        $users = $user->whereNotIn('email', ['admin@certsidea.com', auth()->user()->email])->orderBy('id', 'DESC')->get();
        return view('admin.users.partials.user-listings', compact('users'));

    }


    public function multipleDelete(Request $request)
    {
        User::whereIn('id', $request->user_ids)->delete();
        $users = User::whereNotIn('email', ['admin@certsidea.com', auth()->user()->email])->orderBy('id', 'DESC')->get();
        return view('admin.users.partials.user-listings', compact('users'));
    }
}
