<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sekolah = Sekolah::all();
        return view('admin.pages.sekolah.index')->with('sekolah', $sekolah);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.sekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Sekolah::create($request->all());
        return to_route('sekolah.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sekolah = Sekolah::findOrFail($id);
        return view('admin.pages.sekolah.edit')->with('sekolah', $sekolah);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sekolah = Sekolah::findOrFail($id);
        $sekolah->update($request->all());
        return to_route('sekolah.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Sekolah::destroy($id);
        return to_route('sekolah.index');
    }
}
