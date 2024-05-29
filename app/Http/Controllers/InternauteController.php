<?php

namespace App\Http\Controllers;

use App\Models\Internaute;
use Illuminate\Http\Request;

class InternauteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $internautes = Internaute::all();
        return view('internautes.index', compact('internautes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('internautes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'cin' => 'required|string|max:20',
        ]);

        Internaute::create($validatedData);

        return redirect()->route('internautes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Internaute  $internaute
     * @return \Illuminate\Http\Response
     */
    public function show(Internaute $internaute)
    {
        return view('internautes.show', compact('internaute'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Internaute  $internaute
     * @return \Illuminate\Http\Response
     */
    public function edit(Internaute $internaute)
    {
        return view('internautes.edit', compact('internaute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Internaute  $internaute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Internaute $internaute)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'cin' => 'required|string|max:20',
        ]);

        $internaute->update($validatedData);

        return redirect()->route('internautes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Internaute  $internaute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Internaute $internaute)
    {
        $internaute->delete();

        return redirect()->route('internautes.index');
    }
}
