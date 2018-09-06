<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Films;
use App\Genres;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FilmsController extends Controller
{

    public function index() {

        $films = Films::with('countries')->get();
        return view('films.index', compact('films'));

    }

    public function create() {

        $countries = \App\Countries::all();
        return view('films.add', compact('countries'));

    }

    public function add(Request $request) {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'release_date' => 'required|date',
            'rating' => 'required|numeric|max:5|min:1',
            'ticket_price' => 'required|numeric',
            'country' => 'required|numeric',
            'genres' => 'required',
            'photo' => 'required|file|mimes:png,jpg,jpeg'
        ]);


        $photo = Storage::put('public', $request->file('photo'));
        $slug  = $this->makeSlug( $request->name );

        $film = new Films();

        $film->name         = $request->name;
        $film->description  = $request->description;
        $film->release_date = $request->release_date;
        $film->rating       = $request->rating;
        $film->ticket_price = $request->ticket_price;
        $film->country      = $request->country;
        $film->photo        = $photo;
        $film->slug         = $slug;

        $film->save();

        foreach ( $request->genres as $genre ) {
            Genres::create([
                'film' => $film->id,
                'genre' => $genre
            ]);
        }

        return redirect('films/create')->with('status', 'Film Saved!');

    }

    /**
     * @param $toSlug
     * @param int $counter
     * @return string
     */
    private function makeSlug($toSlug, $counter = 1 ) {

        $slug = Str::slug($toSlug);

        if( $counter > 1 )
            $slug .= "-$counter";

        if ( Films::where('slug', $slug)->first() )
            return $this->makeSlug($toSlug, ++$counter);
        else
            return  $slug;

    }
}
