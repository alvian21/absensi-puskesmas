<?php

namespace App\Http\Controllers;

use App\Divisi;
use App\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('backend.pegawai.index', ['pegawai' => $pegawai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $username = rand(100000, 999999);
        $password = rand(101010, 999999);
        $divisi = Divisi::all();
        return view('backend.pegawai.create', ['username' => $username, 'password' => $password, 'divisi' => $divisi]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:pegawais,username',
            'password' => 'required',
            'divisi' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required|integer',
            'alamat' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        } else {
            $pegawai =  new Pegawai();
            $pegawai->nama_lengkap = $request->get('nama_lengkap');
            $pegawai->username = $request->get('username');
            $pegawai->password = $request->get('password');
            $pegawai->divisi_id = $request->get('divisi');
            $pegawai->jenis_kelamin = $request->get('jenis_kelamin');
            $pegawai->umur = $request->get('umur');
            $pegawai->alamat = $request->get('alamat');
            $pegawai->save();
            session()->flash('success', 'Data pegawai berhasil disimpan');

            return redirect()->route('pegawai.index');
        }
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
        $pegawai = Pegawai::findOrFail($id);
        $divisi = Divisi::all();
        return view('backend.pegawai.edit', ['pegawai' => $pegawai,'divisi' => $divisi]);
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
        $validator = Validator::make($request->all(), [

            'divisi' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required|integer',
            'alamat' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        } else {
            $pegawai =  Pegawai::findOrFail($id);
            $pegawai->nama_lengkap = $request->get('nama_lengkap');
            $pegawai->divisi_id = $request->get('divisi');
            $pegawai->jenis_kelamin = $request->get('jenis_kelamin');
            $pegawai->umur = $request->get('umur');
            $pegawai->alamat = $request->get('alamat');
            $pegawai->save();
            session()->flash('success', 'Data pegawai berhasil diupdate');

            return redirect()->route('pegawai.index');
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
