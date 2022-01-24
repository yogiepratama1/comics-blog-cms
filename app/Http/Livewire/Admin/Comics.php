<?php

namespace App\Http\Livewire\Admin;

use App\Models\Comic;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Comics extends Component
{

    public function render()
    {
        return view('livewire.admin.comics', [
            'comicspre' => Comic::orderBy('position', 'ASC')->with('universe')->where('timeline_id', 1)->get(),
            'comicspost' => Comic::orderBy('position', 'ASC')->with('universe')->where('timeline_id', 2)->get(),
            'comicsnew52' => Comic::orderBy('position', 'ASC')->with('universe')->where('timeline_id', 3)->get(),
            'comicsrebirth' => Comic::orderBy('position', 'ASC')->with('universe')->where('timeline_id', 4)->get(),
            'comicsinfinitefrontier' => Comic::orderBy('position', 'ASC')->with('universe')->where('timeline_id', 5)->get(),
            'rekom52' => Comic::where('recommended', true)->where('timeline_id', 3)->get(),
            'rekomrebirth' => Comic::where('recommended', true)->where('timeline_id', 4)->get(),
        ]);
    }

    public function updateOrder($list)
    {
        foreach ($list as $item)
            Comic::find($item['value'])->update(['position' => $item['order']]);

        session()->flash('berhasil', 'Posisi berhasil diubah');
    }
}
