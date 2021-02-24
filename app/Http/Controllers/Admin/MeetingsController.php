<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMeetingRequest;
use App\Http\Requests\StoreMeetingRequest;
use App\Http\Requests\UpdateMeetingRequest;
use App\Models\Meeting;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MeetingsController extends Controller
{
    public function index()
    {
   

        $meetings = Meeting::all();

        return view('admin.meetings.index', compact('meetings'));
    }

    public function create()
    {
 

        return view('admin.meetings.create');
    }

    public function store(Request $request)
    {
        $meeting = Meeting::create($request->all());

        return redirect()->route('admin.meetings.index');
    }

    public function edit(Meeting $meeting)
    {
      

        return view('admin.meetings.edit', compact('meeting'));
    }

    public function update(UpdateMeetingRequest $request, Meeting $meeting)
    {
        $meeting->update($request->all());

        return redirect()->route('admin.meetings.index');
    }

    public function show(Meeting $meeting)
    {
       

        return view('admin.meetings.show', compact('meeting'));
    }

    public function destroy(Meeting $meeting)
    {
      

        $meeting->delete();

        return back();
    }

    public function massDestroy(MassDestroyMeetingRequest $request)
    {
        Meeting::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
