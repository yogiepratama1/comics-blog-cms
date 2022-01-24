<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Timeline;
use App\Models\Universe;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Universe
        Universe::create([
            'name' => 'Earth Two / Golden Age',
            'year' => '1930s-1950s'
        ]);
        Universe::create([
            'name' => 'New Earth / Earth 0',
            'year' => '1950s-2011'
        ]);
        Universe::create([
            'name' => 'Prime Earth / Earth 0',
            'year' => '2011-present'
        ]);
        Universe::create([
            'name' => 'Earth 3',
        ]);

        // Timeline
        Timeline::create([
            'name' => 'Pre Crisis',
            'universe_id' => 1,
        ]);
        Timeline::create([
            'name' => 'Post Crisis',
            'universe_id' => 2,
        ]);
        Timeline::create([
            'name' => 'New 52',
            'universe_id' => 3,
        ]);
        Timeline::create([
            'name' => 'Rebirth',
            'universe_id' => 3,
        ]);
        Timeline::create([
            'name' => 'Infinite Frontier',
            'universe_id' => 3,
        ]);

        Role::create([
            'name' => 'Admin'
        ]);
        Role::create([
            'name' => 'User'
        ]);
    }
}
