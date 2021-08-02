<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('sponsor-view');

        $sponsors = Sponsor::all();

        return view('dashboard.sponsor.index', [
            'sponsors' => $sponsors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('sponsor-create');

        return view('dashboard.sponsor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('sponsor-create');

        request()->validate([
            'name' => ['required', 'max:255', 'string'],
            'short_name' => ['required', 'max:255', 'string'],
            'type' => ['required', 'integer'],
            'logo' => ['required', 'max:3070', 'file', 'mimes:png,jpg,jpeg'],
        ]);

        Sponsor::firstOrCreate([
            'name' => $request->name,
            'short_name' => $request->short_name,
            'type' => $request->type,
        ])->addMedia($request->logo)
        ->toMediaCollection();


        toastr('Sponsor added successfully');
        return redirect()->route('sponsors.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function edit(Sponsor $sponsor)
    {
        $this->authorize('sponsor-update');

        return view('dashboard.sponsor.edit', [
            'sponsor' => $sponsor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sponsor $sponsor)
    {
        $this->authorize('sponsor-update');

        request()->validate([
            'name' => ['required', 'max:255', 'string'],
            'short_name' => ['required', 'max:255', 'string'],
            'type' => ['required', 'integer'],
            'logo' => ['nullable', 'max:3070', 'file', 'mimes:png,jpg,jpeg'],
        ]);

        $sponsor->update([
            'name' => $request->name,
            'short_name' => $request->short_name,
            'type' => $request->type,
        ]);

        if ($request->hasFile('logo')) {
            // delete previous logo
            $sponsor->getFirstMedia()->delete();

            // store new logo
            $sponsor->addMedia($request->logo)
            ->toMediaCollection();
        }

        toastr('Sponsor updated successfully');
        return redirect()->route('sponsors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponsor $sponsor)
    {
        $this->authorize('sponsor-delete');

        $sponsor->delete();

        toastr('Sponsor deleted successfully');
        return redirect()->route('sponsors.index');
    }
}
