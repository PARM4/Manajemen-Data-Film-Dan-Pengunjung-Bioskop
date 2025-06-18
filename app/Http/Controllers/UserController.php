<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::whereIn('role', ['admin', 'staf'])->get();
        return view('User.lihat', compact('user'));
    }
    public function create()
    {
        return view('User.tambah');
    }
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route('user.index');
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('User.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => bcrypt($request->role),

        ]);
        return redirect()->route('user.index')->with('Sucses', 'Data User Berhasil Diupdate');
    }
    public function destroy($id)
    {
        User::destroy($id);
        return back()->with('success', 'User dihapus!');
    }
}
