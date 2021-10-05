<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Sponsor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('event-view');

        return view('dashboard.events.index', [
            'events' => Event::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('event-create');

        $sponsors = Sponsor::all();

        return view('dashboard.events.create', [
            'sponsors' => $sponsors,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('event-create');

        $request->validate([
            "title" => ['required', 'string', 'max:255'],
            "venue" => ['required', 'string', 'max:255'],
            "organizer" => ['required', 'string', 'max:255'],
            "address" => ['nullable', 'string', 'max:255'],
            "body" => ['required', 'string', 'max:10000'],
            "event_date" => ['required', 'string'],
            "images" => ['required', 'array']
        ]);

        foreach ($request->images as $key => $image) {
            if ($image->isFile() && !($image->clientExtension() == 'jpg' || $image->clientExtension() == 'png' || $image->clientExtension() == 'jpeg' || $image->clientExtension() == 'gif')) {
                $imageNumber = $key+1;
                return back()->withInput()->withErrors(['images' => "Uploaded image number $imageNumber is invalid"]);
            }
        }

        $data = $this->getDate($request->event_date)->merge($request->except('images', 'event_date', '_token', 'sponsor_id'))->toArray();

        $event = Event::firstOrCreate($data);

        $event->sponsors()->sync(request('sponsor_id'));

        foreach ($request->images as $image) {
            $event->addMedia($image)->withResponsiveImages()->toMediaCollection('images');
        }

        toastr('Event added successfully');
        return redirect()->route('events.index');

    }

    public function getDate($dateRange)
    {
        $startDate = Carbon::parse(explode(' - ', $dateRange)[0]);
        $endDate = Carbon::parse(explode(' - ', $dateRange)[1]);

        return collect([
            'start_date' => $startDate,
            'end_date' => $endDate,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $this->authorize('event-view');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $this->authorize('event-update');

        return view('dashboard.events.edit', [
            'event' => $event,
            'sponsors' => Sponsor::all(),
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $this->authorize('event-update');

        $request->validate([
            "title" => ['required', 'string', 'max:255'],
            "venue" => ['required', 'string', 'max:255'],
            "organizer" => ['required', 'string', 'max:255'],
            "address" => ['nullable', 'string', 'max:255'],
            "body" => ['required', 'string', 'max:10000'],
            "event_date" => ['required', 'string'],
            "images" => ['nullable', 'array']
        ]);

        if ($request->has('images')) {
            foreach ($request->images as $key => $image) {
                if ($image->isFile() && !($image->clientExtension() == 'jpg' || $image->clientExtension() == 'png' || $image->clientExtension() == 'jpeg' || $image->clientExtension() == 'gif')) {
                    $imageNumber = $key+1;
                    return back()->withInput()->withErrors(['images' => "Uploaded image number $imageNumber is invalid"]);
                }
            }

            foreach ($request->images as $image) {
                $event->addMedia($image)->withResponsiveImages()->toMediaCollection('images');
            }
        }

        $data = $this->getDate($request->event_date)->merge($request->except('images', 'event_date', '_token', 'sponsor_id'))->toArray();

        $event->update($data);

        $event->sponsors()->sync(request('sponsor_id'));

        toastr('Event added successfully');
        return redirect()->route('events.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $this->authorize('event-delete');

    }
}
