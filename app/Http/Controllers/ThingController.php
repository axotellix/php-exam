<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use > models
use App\Models\Thing;
use App\Models\Place;
use App\Models\User;

class ThingController extends Controller
{
    public function add() {

        $thing  = new Thing();
        $place  = new Place();

        $thing->user_id     = auth()->user()->user_id;
        $thing->name        = request('name');
        $thing->place       = request('place');
        $place->place       = request('place');
        $thing->wrnt        = request('wrnt');
        $thing->description = request('description');

        $thing->save();
        $place->save();

        // return > view
        return redirect('/')->with('add-status', 'Created successfully');
    }

    public function show( $id ) {
        $thing = Thing::where( 'thing_id', $id )->first();
        return view('pages/thing', ['thing' => $thing]);
    }

    public function giveToUser( $user_id, $thing_id ) {
        $thing = new Thing();

        $thing->update(['user_id' => $user_id]);

        $things = Thing::all();
        return view('pages/home', ['things' => $things])->with('Successfully given!');
    }
}
