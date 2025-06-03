<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminEventController extends Controller
{
    public function index()
    {
        return view('admin.events.index', ['events' => Event::with(['category', 'venue'])->get()]);
    }

    public function create()
    {
        return view('admin.events.create', [
            'categories' => Category::all(),
            'venues' => Venue::all(),
        ]);
    }

    public function store(Request $request)
    {
        Event::create($request->all());
        return redirect()->route('admin.events.index');
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', [
            'event' => $event,
            'categories' => Category::all(),
            'venues' => Venue::all(),
        ]);
    }

    public function update(Request $request, Event $event)
    {
        $event->update($request->all());
        return redirect()->route('admin.events.index');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index');
    }
}
