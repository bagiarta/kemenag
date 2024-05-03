<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        // Mengambil semua data user dari database
        $users = User::all();

        // Mengirim data user ke view untuk ditampilkan
        return view('users.index', ['users' => $users]);
    }

    public function show($nik)
    {
        // Mengambil data user berdasarkan ID
        $user = User::findOrFail($nik);

        // Mengirim data user ke view untuk ditampilkan
        return view('users.show', ['user' => $user]);
    }

    public function create()
    {
        // Menampilkan form untuk membuat user baru
        return view('register');
    }

    public function store(Request $request)
    {
        // Validasi input form
        $validator = Validator::make($request->all(), [
            'nik' => 'required',
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
        // Simpan data user baru ke database
        $user = new User([
            'nik' => $request->nik,
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $user->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->back()->with('success', 'User berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Mengambil data user berdasarkan ID
        $user = User::findOrFail($id);

        // Menampilkan form untuk mengedit user
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        // Validasi input form
        $request->validate([
            'nik' => 'nik',
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6',
        ]);

        // Mengambil data user berdasarkan ID
        $user = User::findOrFail($id);

        // Update data user
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('users.index')->with('success', 'User berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Mengambil data user berdasarkan ID dan menghapusnya
        $user = User::findOrFail($id);
        $user->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('users.index')->with('success', 'User berhasil dihapus!');
    }
}
