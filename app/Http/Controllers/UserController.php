<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Mitra;
use App\Models\Role;
use App\Models\Supervisor;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('depart.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::all();
        return view('depart.user.create', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role_id' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $request = new Request($request->all());

        $request->merge([
            'password' => Hash::make($request->password)
        ]);

        $user = User::create($request->all());
        // dd($user['id']);
        switch ($user->role_id) {
            case '1':
                Departemen::create([
                    'user_id' => $user['id'],
                    'nama' => $user['name'],
                ]);
                break;
            case '2':
                Mitra::create([
                    'user_id' => $user['id'],
                    'nama' => $user['name'],
                ]);
                break;
            case '3':
                Dosen::create([
                    'user_id' => $user['id'],
                    'nama' => $user['name'],
                ]);
                break;
            case '4':
                Supervisor::create([
                    'user_id' => $user['id'],
                    'nama' => $user['name'],
                ]);
                break;
            case '5':
                Mahasiswa::create([
                    'user_id' => $user['id'],
                    'nama' => $user['name'],
                ]);
                break;
        }
        return redirect()->route('users.index')->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $result = User::find($user->id);

        if ($result) {
            $data['code'] = 200;
            $data['result'] = $result;
        } else {
            $data['code'] = 500;
            $data['result'] = 'Error';
        }
        return response()->json($data);
        // return view('lowongan.show', compact('lowongan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = User::find($user->id);
        $role = Role::all();
        return view('depart.user.edit', compact('user', 'role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'role_id' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $request = new Request($request->all());

        $request->merge([
            'password' => Hash::make($request->password)
        ]);

        $user->update($request->all());
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        dd($user->role_id);
        switch ($user->role_id) {
            case '1':
                $depart = Departemen::where('user_id', $user->id);
                $depart->delete();
                break;
            case '2':
                $mitra = Mitra::where('user_id', $user->id);
                $mitra->delete();
                break;
            case '3':
                $dospem = Dosen::where('user_id', $user->id);
                $dospem->delete();
                break;
            case '4':
                $spv = Supervisor::where('user_id', $user->id);
                $spv->delete();
                break;
            case '5':
                $mhs = Mahasiswa::where('user_id', $user->id);
                break;
        }

        return redirect()->route('users.index')->with('success', 'Post deleted successfully.');
    }
}
