<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Ekstrakulikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EkstrakulikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $jurusan = Jurusan::all();
        // $jurusan = Jurusan::OrderBy('nama_jurusan', 'asc')->get();
        $ekstrakulikuler = Ekstrakulikuler::OrderBy('nama_ekstrakulikuler', 'asc')->get();

        return view('pages.admin.ekstrakulikuler.index', compact('ekstrakulikuler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
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
            'nama_ekstrakulikuler' => 'required|unique:ekstrakulikulers',
            //'jurusan_id' => 'required'
        ], [
            'nama_ekstrakulikuler.unique' => 'Nama Ekstrakulikuler sudah ada',
        ]);

        Ekstrakulikuler::updateOrCreate(
            [
                'id' => $request->ekstrakulikuler_id,
                //'id' => $request->jurusan_id
            ],
            [
                'nama_ekstrakulikuler' => $request->nama_ekstrakulikuler,
                //'jurusan_id' => $request->jurusan_id,
            ]
        );

        return back()->with('success', 'Data Ekstrakulikuler berhasil diperbarui!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $ekstrakulikuler = Ekstrakulikuler::findOrFail($id);
        //$jurusan = Jurusan::findOrFail($id);
        //$jurusan = Jurusan::all();

        return view('pages.admin.ekstrakulikuler.edit', ['ekstrakulikuler' => $ekstrakulikuler]);
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

        $ekstrakulikuler = Ekstrakulikuler::find($id);
        $ekstrakulikuler->nama_ekstrakulikuler = $request->get('nama_ekstrakulikuler');
       // $ekstrakulikuler->jurusan_id = $request->get('jurusan_id');

        $ekstrakulikuler->save();


        return redirect()->route('ekstrakulikuler.index')->with('success', 'Data ekstrakulikuler berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ekstrakulikuler::find($id)->delete();
        return back()->with('success', 'Data ekstrakulikuler berhasil dihapus!');
    }
}