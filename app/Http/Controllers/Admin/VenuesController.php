<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyVenueRequest;
use App\Http\Requests\StoreVenueRequest;
use App\Http\Requests\UpdateVenueRequest;
use App\Models\Venue;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VenuesController extends Controller
{
    public function index()
    {
       

        $venues = Venue::all();

        return view('admin.venues.index', compact('venues'));
    }

    public function create()
    {
      

        return view('admin.venues.create');
    }

    public function store(Request $request)
    {
        $venue = Venue::create($request->all());

        return redirect()->route('admin.venues.index');
    }

    public function edit(Venue $venue)
    {
       

        return view('admin.venues.edit', compact('venue'));
    }

    public function update(Request $request, Venue $venue)
    {
        $venue->update($request->all());

        return redirect()->route('admin.venues.index');
    }

    public function show(Venue $venue)
    {
       

        return view('admin.venues.show', compact('venue'));
    }

    public function destroy(Venue $venue)
    {


        $venue->delete();

        return back();
    }

    public function massDestroy(MassDestroyVenueRequest $request)
    {
        Venue::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
