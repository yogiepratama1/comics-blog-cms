<?php

namespace App\Http\Livewire\Admin;

use App\Models\Team;
use Livewire\Component;
use App\Models\Universe;
use Illuminate\Support\Str;

class Teams extends Component
{
    public $openCreateModal = false;
    public $openDeleteModal = false;
    public $openEditModal = false;
    public $action;
    public $selectedItem;
    public $name, $image, $body, $universe_id, $slug;
    public function render()
    {
        return view('livewire.admin.teams', [
            'universes' => Universe::all(),
            'teams' => Team::orderBy('name')->with('universe')->get(),
        ]);
    }

    public function openCreateModal()
    {
        $this->openCreateModal = true;
    }

    public function closeCreateModal()
    {
        $this->openCreateModal = false;
    }


    public function closeEditModal()
    {
        $this->openEditModal = false;
    }

    public function closeDeleteModal()
    {
        $this->openDeleteModal = false;
    }

    public function deleteteam(Team $team)
    {
        $team = Team::findorfail($this->selectedItem);
        $team->delete();
        $this->openDeleteModal = false;
        session()->flash('berhasil', 'Team berhasil dihapus');;
    }

    public function selectItem($itemId, $action,  Team $team)
    {
        $this->selectedItem = $itemId;
        if ($action == 'delete') {
            $this->openDeleteModal = true;
        } else {
            $this->openEditModal = true;
            $team = Team::findorfail($this->selectedItem);
            $this->name = $team->name;
            $this->slug = Str::slug($team->name);
            $this->image = $team->image;
            $this->body = $team->body;
            $this->universe_id = $team->universe_id;
        }
    }

    public function createteam()
    {
        Team::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'image' => $this->image,
            'body' => $this->body,
            'universe_id' => $this->universe_id,
        ]);
        $this->openCreateModal = false;
        session()->flash('berhasil', 'Team berhasil dibuat');
    }

    public function updateteam(Team $team)
    {
        $team = Team::findorfail($this->selectedItem);
        $team->update([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'image' => $this->image,
            'body' => $this->body,
            'universe_id' => $this->universe_id,
        ]);

        $this->openEditModal = false;
        session()->flash('berhasil', 'Team berhasil diupdate');
    }
}
