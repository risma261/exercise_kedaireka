<?php

namespace App\Http\Controllers;

use App\Models\Inventaris_type;
use Illuminate\Http\Request;

class InventarisTypeController extends Controller
{
    public function index()
    {
        $inventaristypes = Inventaris_type::paginate(4);
        return view('inventaristype.index', compact('inventaristypes'));
    }

    public function create()
    {
        $inventaristypes = Inventaris_type::get();
        return view('inventaristype.create', compact('inventaristypes'));
    }

    public function store(Request $request)
    {
        $inventaristypes = Inventaris_type::create([
            "kode_barang" => $request->kode_barang,
            "jenis_barang" => $request->jenis_barang,
        ]);

        return redirect('/inventaristype');
    }

    public function edit(Inventaris_type $inventaristype)
    {
        $inventaristype = Inventaris_type::findorfail($inventaristype);
        $inventaristypes =  Inventaris_type::get();

        return view('inventaristype.edit', compact('inventaristype', 'inventaristypes'));
    }
}
