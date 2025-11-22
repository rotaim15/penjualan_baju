<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategory;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $kategories = Kategory::all();

        return view('welcome', compact('kategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function kategori()
    {
        Kategory::insert([
            'name' => 'laravel',
            'description' => 'pframework laravel',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
