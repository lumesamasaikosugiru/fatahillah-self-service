<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('pages.user.index', [
            'user' => $user,
        ]);
    }

    public function create()
    {
        return view('pages.user.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nip' => ['required', 'min:10', 'max:10'],
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'role' => ['required', Rule::in(['superadmin', 'admin', 'pengurus', 'kepala sekolah', 'operator sekolah'])],
            'status' => ['required', Rule::in(['aktif', 'nonaktif'])],
        ]);

        User::create($request->validated());

        return redirect('/user')->with('success', 'Berhasil menambahkan data!');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nip' => ['required', 'min:10', 'max:10'],
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'role' => ['required', Rule::in(['superadmin', 'admin', 'pengurus', 'kepala sekolah', 'operator sekolah'])],
            'status' => ['required', Rule::in(['aktif', 'nonaktif'])],
        ]);

        User::findOrFail($id)->update($request->validated());

        return redirect('/user')->with('success', 'Berhasil mengubah data!');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('pages.user.edit', [
            'user' => $user
        ]);
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/user')->with('success', 'Berhasil menghapus data');

    }
}
