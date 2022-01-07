<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Kategori;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $barang     = Barang::all();
        $kategori   = Kategori::all();

        return view('home' , [
            'barang'     => $barang,
            'kategori'   => $kategori
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $barang =Barang::where('nama_barang', $id)->first();
        return redirect()->route('user.index')->with('barang',$barang);
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
    public function show($slug)
    {
        $barang=Barang::where('slug', $slug)->first();

        $kategori   = Kategori::all();

        if($barang){

            return view('single-product' , [
                'barang'     => $barang,
                'kategori'     => $kategori,
            ]);

        }else{
             abort(404);
        }

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

        public function search(Request $request)
    {
        $keyword = $request->search;

        if($request->kategori){

            $kategori = Kategori::where('nama_kategori', $request->kategori)->first();

            $barangs = Barang::where('id_kategori', $kategori->id)->paginate(5);

        }else{
            $barangs = Barang::where('nama_barang', 'like', "%" . $keyword . "%")->paginate(5);
        }

        return view('search', compact('barangs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
