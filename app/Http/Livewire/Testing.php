<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Testing extends Component
{
    public function render()
    {
        $url = 'http://api.test/api/events';
        $content = file_get_contents($url);
        $comics = json_decode($content, true)['data'];
        return view('livewire.testing', [
            'comics' => $comics,
        ]);
    }

    public function show()
    {
        $url = 'http://api.test/api/events';
        $content = file_get_contents($url);
        $comics = json_decode($content, true)['data'];
        $url = 'http://api.test/api/events/' . $comics['slug'];
        $content = file_get_contents($url);
        $comic = json_decode($content, true)['data'];
        dd($comic);
        return view('testingshow', [
            'comic' => $comic,
        ]);
    }
}
