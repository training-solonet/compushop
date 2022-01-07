<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
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
        $keranjang= Keranjang::with('barang')->where('id_user', Auth::id())->get();
        // return $keranjang;
        if(!count($keranjang)>0){
            return view('keranjangKosong');
        }

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
        $cekBarang = Barang::with('kategori')->get();

        if(Auth::check()){
            $cekBarang = Barang::where('id', $request->id_barang)->first();
            $keranjang = Keranjang::where('id', $request->id_barang)->first();

            if($cekBarang){
                if(Keranjang::where('id_barang', $request->id_barang)->where('id_user', Auth::id())->exists()){
                    $keranjang->update(['jumlah_barang' => $keranjang->jumlah_barang + $request->jumlah_barang]);
                    return redirect()->route('keranjang.index')->with('success', 'Product is inc to Cart Succesfully');

                } else{
                    $barangKeranjang = new Keranjang();
                    $barangKeranjang->id_barang = $request->id_barang;
                    $barangKeranjang->id_user = Auth::id();
                    $barangKeranjang->jumlah_barang = $request->jumlah_barang;
                    $barangKeranjang->save();
            return redirect()->route('keranjang.index')->with('success', 'Product is add to Cart Succesfully');
                }

            }
        }
        // $user= Auth::user()->id;

        // $cek = Keranjang::where('id_barang', $request->id_barang)
        //                 ->where('id_user', $user)
        //                 ->first();

        // if($cek){

        //     //fungsi update
        //     Keranjang::where('id_barang', $request->id_barang)
        //                 ->where('id_user', $user)
        //                 ->update([
        //                         'jumlah_barang'     => $cek->jumlah_barang + $request->jumlah_barang
        //                         // if($request->jumlah_barang<0){
        //                         //     $cek->jumlah_barang - $request->jumlah_barang
        //                         // } else{
        //                         //     $cek->jumlah_barang + $request->jumlah_barang
        //                         // }
        //                     ]);

        // }else{

        //     Keranjang::create([
        //         'jumlah_barang'     => $request->jumlah_barang,
        //         'id_user'           => $user,
        //         'id_barang'         => $request->id_barang
        //     ]);
        // }


        // return redirect()->route('keranjang.index')->with('success', 'Product is add to Cart Succesfully');
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
        Keranjang::find($id)->delete();
        return redirect()->route('keranjang.index')->with('success', "has been Deleted");
    }
}
