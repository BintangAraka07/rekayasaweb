<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function create(Request $request)
    {
        $pelanggan = Pelanggan::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);

        return response()->json([
            'message' => 'Pelanggan berhasil ditambahkan',
            'data' => $pelanggan
        ], 201);
    }

    public function read()
    {
        return response()->json(Pelanggan::all());
    }

    public function update(Request $request)
    {
        $pelanggan = Pelanggan::find($request->id);

        if (!$pelanggan) {
            return response()->json(['message' => 'Pelanggan tidak ditemukan'], 404);
        }

        $pelanggan->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);

        return response()->json([
            'message' => 'Pelanggan berhasil diupdate',
            'data' => $pelanggan
        ]);
    }

    public function delete(Request $request)
    {
        $pelanggan = Pelanggan::find($request->id);

        if (!$pelanggan) {
            return response()->json(['message' => 'Pelanggan tidak ditemukan'], 404);
        }

        $pelanggan->delete();

        return response()->json(['message' => 'Pelanggan berhasil dihapus']);
    }
}
