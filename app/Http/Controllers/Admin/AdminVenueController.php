<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminVenueController extends Controller
{
    public function index() {
        return view('admin.venues.index', ['venues' => Venue::all()]);
    }

    public function create() {
        return view('admin.venues.create');
    }

    public function store(Request $request) {
        Venue::create($request->all());
        return redirect()->route('admin.venues.index');
    }

    public function edit(Venue $venue) {
        return view('admin.venues.edit', ['venue' => $venue]);
    }

    public function update(Request $request, Venue $venue) {
        $venue->update($request->all());
        return redirect()->route('admin.venues.index');
    }

    public function destroy(Venue $venue) {
        $venue->delete();
        return redirect()->route('admin.venues.index');
    }
}
