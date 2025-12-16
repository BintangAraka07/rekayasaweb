<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function create(Request $request)
    {
        $produk = Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);

        return response()->json([
            'message' => 'Produk berhasil ditambahkan',
            'data' => $produk
        ], 201);
    }

    public function read()
    {
        return response()->json(Produk::all());
    }

    public function update(Request $request)
    {
        $produk = Produk::find($request->id);

        if (!$produk) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        $produk->update([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);

        return response()->json([
            'message' => 'Produk berhasil diupdate',
            'data' => $produk
        ]);
    }

    public function delete(Request $request)
    {
        $produk = Produk::find($request->id);

        if (!$produk) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        $produk->delete();

        return response()->json(['message' => 'Produk berhasil dihapus']);
    }
}
