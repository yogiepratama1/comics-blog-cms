<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Character;
use App\Models\Comic;

class CharactersIndex extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.characters-index', [
            'characters' => Character::orderBy('name', 'ASC')->search($this->search)->with('universe', 'teams')->get(),
            'batfamily' => Character::whereHas('teams', function ($bat) {
                $bat->where('team_id', 2);
            })->get(),
            'justiceleague' => Character::whereHas('teams', function ($jl) {
                $jl->where('team_id', 1);
            })->get(),
            'justicesociety' => Character::whereHas('teams', function ($jsa) {
                $jsa->where('team_id', 29);
            })->get(),
        ]);
    }
}
