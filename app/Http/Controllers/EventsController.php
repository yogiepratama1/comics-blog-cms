<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        return view('pages.events-index', [
            'comicspre' => Comic::orderBy('position', 'ASC')->with('universe')->where('timeline_id', 1)->get(),
            'comicspost' => Comic::orderBy('position', 'ASC')->with('universe')->where('timeline_id', 2)->get(),
            'comicsnew52' => Comic::orderBy('position', 'ASC')->with('universe')->where('timeline_id', 3)->get(),
            'comicsrebirth' => Comic::orderBy('position', 'ASC')->with('universe')->where('timeline_id', 4)->get(),
            'comicsinfinitefrontier' => Comic::orderBy('position', 'ASC')->with('universe')->where('timeline_id', 5)->get(),
            'rekom52' => Comic::where('recommended', true)->where('timeline_id', 3)->get(),
            'rekomrebirth' => Comic::where('recommended', true)->where('timeline_id', 4)->get(),
        ]);
    }

    public function show(Comic $comic)
    {
        return view('pages.events-show', [
            'comic' => $comic,
            'next' => Comic::where('position', '>', $comic->position)->orderBy('position')->select('slug', 'name')->first(),
            'previous' => Comic::where('position', '<', $comic->position)->orderBy('position', 'DESC')->select('slug', 'name')->first()
        ]);
    }
}
