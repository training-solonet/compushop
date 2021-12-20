<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang= Barang::with('kategori')->get();
    return view('barang.index',compact('barang'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori=kategori::select('id','nama_kategori')->get();

        return view('barang.create',compact('kategori'));
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
            'nama_barang'=> 'required|max:20',
            'harga_barang'=> 'required|max:20',
            'stok_barang'=> 'required|max:20',
            'deskripsi'=> 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('foto_barang');

		$nama_file = time()."_".$file->getClientOriginalName();

      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'img';

		$file->move($tujuan_upload,$nama_file);

       $barang = barang::create([
        'nama_barang'=> $request->nama_barang,
        'id_kategori'=> $request->id_kategori,
        'harga_barang'=> $request->harga_barang,
        'stok_barang'=> $request->stok_barang,
        'deskripsi'=> $request->deskripsi,
        'foto_barang'=> $nama_file,
       ]);

        return redirect()->route('barang.index')->with('success','Berhasil Simpan');
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
        $barang = Barang::find($id);
        $kategori=Kategori::all();

        return view('barang.edit' , [
            'barang'     => $barang,
            'kategori' =>$kategori

        ]);
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
        $rules = ([
            'nama_barang'=> 'required|max:20',
            'harga_barang'=> 'required|max:20',
            'stok_barang'=> 'required|max:20',
            'deskripsi'=> 'required',
        ]);

            $validateData = $request->validate($rules);

            barang::find($id)->update($validateData);
            return redirect()->route('barang.index')->with('success', 'Product has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::find($id)->delete();
        return redirect()->route('barang.index')->with('success', "has been Deleted");
    }
}
