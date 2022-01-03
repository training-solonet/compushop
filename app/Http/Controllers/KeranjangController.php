<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Keranjang;
class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keranjang= Keranjang::with('barang')->get();
        return view('cart',compact('keranjang'));

        // $barang=Barang::all();
        // $keranjang = Keranjang::with('barang')->get();
        // return view('cart' , [
        //     'barang'     => $barang,
        //     'keranjang' =>$keranjang
        // ]);

        // $barang = Barang::all();
        // // return $keranjang;
        // return view('cart',compact('keranjang','barang'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang=Barang::select('id','nama_barang')->get();

        return view('single-product',compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user= Auth::user()->id;

        $cek = Keranjang::where('id_barang', $request->id_barang)
                        ->where('id_user', $user)
                        ->first();

        if($cek){

            //fungsi update
            Keranjang::where('id_barang', $request->id_barang)
                        ->where('id_user', $user)
                        ->update([
                                'jumlah_barang'     => $cek->jumlah_barang + $request->jumlah_barang
                            ]);

        }else{

            Keranjang::create([
                'jumlah_barang'     => $request->jumlah_barang,
                'id_user'           => $user,
                'id_barang'         => $request->id_barang
            ]);
        }


        return redirect()->route('keranjang.index')->with('success', 'Product is add to Cart Succesfully');
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
