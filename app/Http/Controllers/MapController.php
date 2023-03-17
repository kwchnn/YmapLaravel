<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MapController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $map = new Map();
        $map->user_id = Auth::user()->getAuthIdentifier();
        $map->name = $request->input('name');
        $map->length = $request->input('length');
        $map->width = $request->input('width');
        $map->save();
        return redirect()->route('index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $map = Map::find($id);
        if (!$map || Auth::user()->getAuthIdentifier() !== $map->user_id)
        {
            return back();
        }
        return view('map/edit', ['map' => $map]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $point = Map::find($id);
        $point->name = $request->input('name');
        $point->length = $request->input('length');
        $point->width = $request->input('width');
        $point->update();
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $point = Map::find($id);
        if (!$point || Auth::user()->getAuthIdentifier() !== $point->user_id)
        {
            return back();
        }
        $point->delete();
        return redirect()->route('index');
    }
}
