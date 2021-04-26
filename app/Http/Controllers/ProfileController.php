<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use App\Models\Dosen;
use App\Models\Kabupaten;
use App\Models\Mahasiswa;
use App\Models\Mitra;
use App\Models\Supervisor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idUserLogin = Auth::id();
        $user = User::where("id", $idUserLogin)->first();
        switch ($user->role_id) {
            case '1':
                $depart = Departemen::where("user_id", $idUserLogin)->first();
                return view('depart.profile.index', compact('depart'));
                break;
            case '2':
                $mitra = Mitra::where("user_id", $idUserLogin)->first();
                return view('mitra.index', compact('mitra'));
                break;
            case '3':
                $dosen = Dosen::where("user_id", $idUserLogin)->first();
                return view('dosen.index', compact('dosen'));
                break;
            case '4':
                $spv = Supervisor::where("user_id", $idUserLogin)->first();
                return view('spv.index', compact('spv'));
                break;
            case '5':
                $mhs = Mahasiswa::where("user_id", $idUserLogin)->first();
                return view('mhs.index', compact('mhs'));
                break;
        };
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $idUserLogin = Auth::id();
        $user = User::where("id", $idUserLogin)->first();
        switch ($user->role_id) {
            case '1':
                $depart = Departemen::where("user_id", $idUserLogin)->first();
                return view('depart.profile', compact('depart'));
                break;
            case '2':
                $mitra = Mitra::where("user_id", $idUserLogin)->first();
                $kabupatens = Kabupaten::all();
                return view('mitra.profile', ['mitra' => $mitra, 'kabupatens' => $kabupatens]);
                break;
            case '3':
                $dosen = Dosen::where("user_id", $idUserLogin)->first();
                return view('dosen.profile', compact('dosen'));
                break;
            case '4':
                $spv = Supervisor::where("user_id", $idUserLogin)->first();
                return view('spv.profile', compact('spv'));
                break;
            case '5':
                $mhs = Mahasiswa::where("user_id", $idUserLogin)->first();
                return view('mhs.profile', compact('mhs'));
                break;
        };
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $idUserLogin = Auth::id();
        $user = $request->user();
        switch ($user->role_id) {
            case '1':
                $depart = Departemen::where("user_id", $idUserLogin)->first();
                $request->validate([
                    'nama' => 'required',
                    'alamat' => 'required',
                    'telepon' => 'required',
                    'NIDN' => 'required',
                    'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $imageName = time() . '.' . $request->foto->extension();
                $request->foto->move(public_path('images'), $imageName);

                $depart->update($request->all());
                return redirect()->route('depart.home');
                break;
            case '2':
                $mitra = Mitra::where("user_id", $idUserLogin)->first();
                $request->validate([
                    'nama' => 'required',
                    'alamat' => 'required',
                    'telepon' => 'required',
                    'fax' => 'required',
                    'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'kab_id' => 'required',
                ]);

                $imageName = time() . '.' . $request->foto->extension();
                $request->foto->move(public_path('images'), $imageName);

                $mitra->update($request->all());

                return redirect()->route('profile.index');
                break;
            case '3':
                $dosen = Dosen::where("user_id", $idUserLogin)->first();
                $dosen->update($request->all());
                return redirect()->route('dospem.home');
                break;
            case '4':
                $spv = Supervisor::where("user_id", $idUserLogin)->first();
                $spv->update($request->all());
                return redirect()->route('supervisor.home');
                break;
            case '5':
                $mhs = Mahasiswa::where("user_id", $idUserLogin)->first();
                $mhs->update($request->all());
                return redirect()->route('mahasiswa.home');
                break;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
