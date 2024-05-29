<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Internaute;
use App\Models\Hotel;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::with(['internaute', 'hotel'])->get();
        return view('reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $internautes = Internaute::all();
        $hotels = Hotel::all();
        return view('reservations.create', compact('internautes', 'hotels'));
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
            'id_internaute' => 'required|exists:internautes,id',
            'id_hotel' => 'required|exists:hotels,id',
            'date_debut_sejour' => 'required|date',
            'date_fin_sejour' => 'required|date|after:date_debut_sejour',
            'titre' => 'required|string|max:255',
        ]);

        Reservation::create($validatedData);

        return redirect()->route('reservations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        $internautes = Internaute::all();
        $hotels = Hotel::all();
        return view('reservations.edit', compact('reservation', 'internautes', 'hotels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        $validatedData = $request->validate([
            'id_internaute' => 'required|exists:internautes,id',
            'id_hotel' => 'required|exists:hotels,id',
            'date_debut_sejour' => 'required|date',
            'date_fin_sejour' => 'required|date|after:date_debut_sejour',
            'titre' => 'required|string|max:255',
        ]);

        $reservation->update($validatedData);

        return redirect()->route('reservations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->route('reservations.index');
    }
}
