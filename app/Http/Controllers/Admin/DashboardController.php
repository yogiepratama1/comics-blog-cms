<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use App\Models\Comic;
use App\Models\Timeline;
use App\Models\Universe;
use App\Models\Character;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            // 'comics' => Comic::orderBy('position', 'ASC')->get(),
        ]);
    }

    public function create()
    {
        return view('admin.create', [
            'universes' => Universe::all(),
            'timelines' => Timeline::all(),
            'characters' => Character::all(),
        ]);
    }

    public function store(Request $request, Comic $comic)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'recommended' => 'numeric',
            'universe_id' => 'required',
            'timeline_id' => 'required',
            'issuenumber' => 'nullable|numeric',
            'issuelist' => 'nullable',
            'image' => 'nullable',
            'body' => 'required',
        ]);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 300);
        $validatedData['slug'] = Str::slug($request->name);
        $position = $comic->max('position') + 1;
        $comic_store = Comic::create($validatedData + ['position' => $position]);
        $comic_store->characters()->attach($request->characters);
        return redirect('/admin/dashboard')->with('berhasil', 'telah dibuat');
    }

    public function edit(Comic $comic)
    {
        return view('admin.edit', [
            'comic' => $comic,
            'universes' => Universe::all(),
            'timelines' => Timeline::all(),
            'characters' => Character::all(),
        ]);
    }

    public function update(Request $request, Comic $comic)
    {
        $rules = [
            'name' => 'required|max:255',
            'recommended' => 'numeric',
            'universe_id' => 'required',
            'timeline_id' => 'required',
            'issuenumber' => 'nullable|numeric',
            'issuelist' => 'nullable',
            'image' => 'nullable',
            'body' => 'required',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 250);
        $validatedData['slug'] = Str::slug($request->name);
        Comic::where('id', $comic->id)->update($validatedData);
        $comic->characters()->sync($request->characters);
        return redirect('/admin/dashboard')->with('berhasil', 'Event telah diupdate');
    }

    public function destroy(Comic $comic, $id)
    {
        if ($comic->image) {
            Storage::delete($comic->image);
        }
        $comic = Comic::findorfail($id);
        $comic->characters()->detach();
        $comic->delete();
        return redirect('/admin/dashboard')->with('berhasil', 'Events telah dihapus');
    }

    public function createCharacter()
    {
        return view('admin.create-character', [
            'universes' => Universe::all(),
            'teams' => Team::all(),
        ]);
    }

    public function storecharacter(Request $request)
    {
        $validatedData = $request->validate([
            'universe_id' => 'required',
            'name' => 'required|max:255',
            'alias' => 'nullable',
            'identity' => 'nullable',
            'year' => 'nullable',
            'first_appearance' => 'nullable',
            'last_appearance' => 'nullable',
            'image' => 'nullable',
            'body' => 'required',
        ]);
        // if ($request->file('image')) {
        //     $file = $validatedData['image'] = $request->file('image');
        //     $img_name = time() . '.' . $file->getClientOriginalName();
        //     $img = Image::make($file);
        //     $img->save(public_path('storage/characters-images/' . $img_name), 30);
        // }

        $validatedData['slug'] = Str::slug($request->name);
        $character_store = Character::create($validatedData);
        $character_store->teams()->attach($request->teams);
        return redirect('/admin/dashboard')->with('berhasil', 'Character telah dibuat');
    }

    public function editcharacter(Character $character)
    {
        return view('admin.edit-character', [
            'character' => $character,
            'universes' => Universe::all(),
            'teams' => Team::all(),
        ]);
    }

    public function updatecharacter(Request $request, Character $character)
    {
        $rules = [
            'universe_id' => 'required',
            'name' => 'required|max:255',
            'alias' => 'nullable',
            'identity' => 'nullable',
            'year' => 'nullable',
            'first_appearance' => 'nullable',
            'last_appearance' => 'nullable',
            'image' => 'nullable',
            'body' => 'required',
        ];

        $validatedData = $request->validate($rules);

        // if ($request->file('image')) {
        //     if ($request->oldImage) {
        //         Storage::delete($request->oldImage);
        //     }
        // }
        $validatedData['slug'] = Str::slug($request->name);
        Character::where('id', $character->id)->update($validatedData);
        $character->teams()->sync($request->teams);
        return redirect('/admin/dashboard')->with('berhasil', 'Character telah diupdate');
    }
}
