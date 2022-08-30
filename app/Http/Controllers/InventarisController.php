<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Http\Request;
use App\Http\Requests\StoreInventarisRequest;
use App\Http\Requests\UpdateInventarisRequest;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventariss = Inventaris::paginate(4);

        return view('inventaris.index', compact('inventariss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventariss = Inventaris::get();
        return view('inventaris.create', compact('inventariss'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInventarisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventaris = Inventaris::create([
            "inventaris_type_id" => $request->inventaris,
            'KodeBarang' => $request ->kodebarang,
            'JenisBarang' => $request ->jenisbarang,
            'MerkBarang' => $request ->merkbarang,
            'Jumlah' => $request ->jumlah,
        ]);

        return redirect('/inventaris');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function show(Inventaris $inventaris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function edit($inventaris)
    {
        $inventaris = Inventaris::findorfail($inventaris);
        return view('inventaris.edit', compact('inventaris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInventarisRequest  $request
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $inventaris)
    {
        $inventaris = Inventaris::findorfail($inventaris);
        $inventaris -> update([
            'KodeBarang' => $request ->kodebarang,
            'JenisBarang' => $request ->jenisbarang,
            'MerkBarang' => $request ->merkbarang,
            'Jumlah' => $request ->jumlah,
        ]);
        return redirect("/inventaris");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function destroy($inventaris)
    {
            $inventaris = Inventaris::findorfail($inventaris);
            $inventaris->delete();

            return redirect('/inventaris');
    }
}
