<?php

namespace App\Http\Controllers;
use App\Barang;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id)
    {
    	$detail = Detail::where('id', $id)->first();

    	return view('front.detail', compact('detail'));
    }
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
        
        $detail = new detail();
        $detail->nama_produk = $request->nama_produk;
        $detail->harga_produk = $request->harga_produk;
        $detail->deskripsi = $request->deskripsi;
        $detail->status = $request->status;
        $service->save();
        Alert::success('Done', 'Data berhasil dibuat');
        return back();
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
        
        $detail = new detail();
        $detail->nama_produk = $request->nama_produk;
        $detail->harga_produk = $request->harga_produk;
        $detail->deskripsi = $request->deskripsi;
        $detail->status = $request->status;
        $service->save();
        Alert::success('Done', 'Data berhasil dibuat');
        return back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail = detail::findOrFail($id);
        $detail->delete();
        Alert::success('Done', 'Data berhasil dihapus');
        return redirect()->route('detail.index');
    }
}
