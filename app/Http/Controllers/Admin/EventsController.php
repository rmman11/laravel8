<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEventRequest;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Venue;
use Gate;
use DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EventsController extends Controller
{
    public function index()
    {
        

        //$events = DB::table('events')->get();


        $events = Event::all();

        //dd($events);

        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
       

        $venues = Venue::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.events.create', compact('venues'));
    }

    public function store(Request $request)
    {
        $event = Event::create($request->all());

        return redirect()->route('admin.events.index');
    }

    public function edit(Event $event)
    {
        

        $venues = Venue::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $event->load('venue');

        return view('admin.events.edit', compact('venues', 'event'));
    }

    public function update(Request $request, Event $event)
    {
        $event->update($request->all());

        return redirect()->route('admin.events.index');
    }

    public function show(Event $event)
    {
    

        $event->load('venue');

        return view('admin.events.show', compact('event'));
    }

    public function destroy(Event $event)
    {
    

        $event->delete();

        return back();
    }

    public function massDestroy(MassDestroyEventRequest $request)
    {
        Event::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
