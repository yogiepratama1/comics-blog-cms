<?php

namespace App\Http\Livewire;

use App\Models\Comic;
use Livewire\Component;

class EventsIndex extends Component
{
    public function render()
    {
        return view('livewire.events-index', [
            'comicspre' => Comic::orderBy('position', 'ASC')->with('universe')->where('timeline_id', 1)->get(),
            'comicspost' => Comic::orderBy('position', 'ASC')->with('universe')->where('timeline_id', 2)->get(),
            'comicsnew52' => Comic::orderBy('position', 'ASC')->with('universe')->where('timeline_id', 3)->get(),
            'comicsrebirth' => Comic::orderBy('position', 'ASC')->with('universe')->where('timeline_id', 4)->get(),
            'comicsinfinitefrontier' => Comic::orderBy('position', 'ASC')->with('universe')->where('timeline_id', 5)->get(),
            'rekomendasinew52' => Comic::whereIn('id', [47, 56, 62, 63])->get(),
            'rekomendasirebirth' => Comic::whereIn('id', [64, 66, 70, 71, 72, 75, 77, 78])->get(),
        ]);
    }
}
