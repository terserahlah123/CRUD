<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coba;
use Illuminate\Support\Facades\Storage;

class CobaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = [
            'data' => Coba::paginate(10),
            'title' => 'Daftar Santri'
        ];
        return view('coba.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coba.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->validate($request, [
                'nama_santri'   => 'required',
                'alamat'        => 'required',
                'jenis_kelamin' => 'required',
                'tanggal_lahir' => 'required',
                'nomor'         => 'required|numeric',
                'daerah_asal'   => 'required'
            ]);

            $coba = Coba::create([

            'nama_santri'   => $request->nama_santri,
            'alamat'        => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nomor'         => $request->nomor,
            'daerah_asal'   => $request->daerah_asal
        ]);

        if($coba){
            //redirect dengan pesan sukses
            return redirect('/')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect('/create')->with(['error' => 'Data Gagal Disimpan!']);
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
    public function edit($id, Coba $data)
    {
        $data = Coba::where('id_santri',$id)->get();
        return view('coba.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Coba $data)
    {
        $this->validate($request, [
                'nama_santri'   => 'required',
                'alamat'        => 'required',
                'jenis_kelamin' => 'required',
                'tanggal_lahir' => 'required',
                'nomor'         => 'required',
                'daerah_asal'   => 'required'
            ]);

        //get data Blog by ID
        // $data = Coba::findOrFail($data->id_santri);
        $data = Coba::where('id_santri',$id);
        $data->update([
            'nama_santri'   => $request->nama_santri,
            'alamat'        => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nomor'         => $request->nomor,
            'daerah_asal'   => $request->daerah_asal
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Coba::findOrFail($id);
        $data->delete();

        return redirect('/');
    }

    public function baru()
    {
        return view('coba.baru');
    }
}
