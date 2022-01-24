<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QtyController extends Controller
{
    public function incQty(Request $request){
        $keranjang = Keranjang::get();

        $inc = $request->inc;
        if(isset($request->incButton)){
            $inc++;
        }

        $keranjang = new Keranjang();
        $keranjang->jumlah_barang = $keranjang->jumlah_barang + $inc;

        return $inc;
        // Keranjang::update([
        //     'jumlah_barang' => $keranjang->jumlah_barang + $inc
        // ]);

        return route('keranjang.index');
    }
}
