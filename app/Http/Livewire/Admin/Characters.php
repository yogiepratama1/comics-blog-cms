<?php

namespace App\Http\Livewire\Admin;

use GuzzleHttp\Client;
use Livewire\Component;
use App\Models\Character;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class Characters extends Component
{
    public $deleteModal = false;
    public $action;
    public $selectedItem;
    public $name;
    public $alias;
    public $image;
    public $body;

    public function render()
    {
        return view('livewire.admin.characters', [
            'characters' => Character::orderBy('name', 'ASC')->get(),
        ]);
    }

    public function openModal()
    {
        $this->deleteModal = true;
    }

    public function selectItem($itemId, $action)
    {
        $this->selectedItem = $itemId;
        if ($action == 'delete') {
            $this->deleteModal = true;
        }
    }
    public function deletecharacter(Character $character)
    {

        $character = Character::findorfail($this->selectedItem);
        $character->teams()->detach();
        if ($character->image) {
            Storage::delete($character->image);
        }
        $character->delete();
        $this->reset();
    }
}
