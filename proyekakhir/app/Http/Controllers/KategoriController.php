<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function create(Request $request)
    {
        $kategori = Kategori::create([
            'nama_kategori' => $request->nama_kategori
        ]);

        return response()->json([
            'message' => 'Kategori berhasil ditambahkan',
            'data' => $kategori
        ], 201);
    }

    public function read()
    {
        return response()->json(Kategori::all());
    }

    public function update(Request $request)
    {
        $kategori = Kategori::find($request->id);

        if (!$kategori) {
            return response()->json(['message' => 'Kategori tidak ditemukan'], 404);
        }

        $kategori->update([
            'nama_kategori' => $request->nama_kategori
        ]);

        return response()->json([
            'message' => 'Kategori berhasil diupdate',
            'data' => $kategori
        ]);
    }

    public function delete(Request $request)
    {
        $kategori = Kategori::find($request->id);

        if (!$kategori) {
            return response()->json(['message' => 'Kategori tidak ditemukan'], 404);
        }

        $kategori->delete();

        return response()->json(['message' => 'Kategori berhasil dihapus']);
    }
}
