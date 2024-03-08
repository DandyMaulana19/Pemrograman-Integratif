<?php

namespace App\Http\Controllers;

use App\Models\Collections;
use Illuminate\Http\Request;



class CollectionController extends Controller
{
    public function index()
    {
        return view('koleksi.daftarKoleksi', [
            'collection' => Collections::all()
        ]);
    }

    public function create()
    {
        return view('koleksi.registrasi');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namaKoleksi' => 'string',
            'jenisKoleksi' => 'integer',
            'jumlahKoleksi' => 'integer',
        ]);

        // dd($validatedData);

        Collections::create($validatedData);
        return redirect('/koleksi');
    }

    public function show(Collections $collection)
    {
        return view('koleksi.infoKoleksi', compact('collection'));
    }
}
