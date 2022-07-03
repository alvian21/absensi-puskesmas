<?php

namespace App\Http\Controllers;

use App\Absensi;
use Illuminate\Http\Request;
use App\Pegawai;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid = Auth::guard('pegawai')->user()->id;
        $minggu = [
            0 => 'Minggu',
            1 => 'Senin',
            2 => 'Selasa',
            3 => 'Rabu',
            4 => 'Kamis',
            5 => 'Jumat',
            6 => 'Sabtu',
        ];
        $absensi = Absensi::where('pegawai_id', $userid)->get();
        return view('backend.absensi.index', ['absensi' => $absensi, 'minggu' => $minggu]);
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
        $validator = Validator::make($request->all(), [
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        } else {
            $userid = Auth::guard('pegawai')->user()->id;

            $status = $request->get('status');
            $cek = Absensi::where('pegawai_id', $userid)->where('status', $status)->whereDate('jam', date('Y-m-d'))->first();
            if (!$cek) {
                if ($status == 'Absensi Masuk') {
                    $masuk_min = '07:00';
                    $data = Carbon::createFromFormat('H:i', $masuk_min)->diffInMinutes(Carbon::now());

                    //cek
                    if ($data > 0 && $data <= 15) {
                        $absensi = new Absensi();
                        $absensi->pegawai_id = $userid;
                        $absensi->status = $status;
                        $absensi->jam = date('Y-m-d H:i:s');
                        $absensi->save();
                    } else {
                        return redirect()->back()->withErrors(['Maaf, absensi belum dibuka']);
                    }
                } elseif ($status == 'Izin') {
                    $absensi = new Absensi();
                    $absensi->pegawai_id = $userid;
                    $absensi->status = $status;
                    $absensi->catatan = $request->get('catatan');
                    $absensi->jam = date('Y-m-d H:i:s');
                    $absensi->save();
                } elseif ($status == 'Terlambat') {

                    $terlambat_min = '07:16';
                    $data = Carbon::createFromFormat('H:i', $terlambat_min)->diffInMinutes(Carbon::now());

                    //cek
                    if ($data > 0 && $data <= 15) {
                        $absensi = new Absensi();
                        $absensi->pegawai_id = $userid;
                        $absensi->status = $status;
                        $absensi->jam = date('Y-m-d H:i:s');
                        $absensi->save();
                    } else {
                        return redirect()->back()->withErrors(['Maaf, absensi belum dibuka']);
                    }
                } else {
                    $pulang_min = '14:00';
                    $data = Carbon::createFromFormat('H:i', $pulang_min)->diffInMinutes(Carbon::now());
                    if ($data > 0 && $data <= 15) {
                        $absensi = new Absensi();
                        $absensi->pegawai_id = $userid;
                        $absensi->status = $status;
                        $absensi->jam = date('Y-m-d H:i:s');
                        $absensi->save();
                    } else {
                        return redirect()->back()->withErrors(['Maaf, absensi belum dibuka']);
                    }
                }
            } else {
                return redirect()->back()->withErrors(['Maaf, absensi sudah dilakukan']);
            }


            session()->flash('success', 'Data ' . $status . ' berhasil disimpan');

            return redirect()->route('absensi.index');
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
        //
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
        //
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
