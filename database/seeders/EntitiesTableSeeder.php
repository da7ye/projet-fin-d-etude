<?php

namespace Database\Seeders;

use App\Models\Entity;
use Illuminate\Database\Seeder;

class EntitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Entity::firstOrCreate([
            'name' => 'agence dar naim',
            'adresse' => 'dar naim nktt'
        ]);

        Entity::firstOrCreate([
            'name' => 'agence skk',
            'adresse' => 'soukouk nktt'
        ]);

        Entity::firstOrCreate([
            'name' => 'centre principale',
            'adresse' => 'leksar nktt'
        ]);

        Entity::firstOrCreate([
            'name' => 'centre arafat',
            'adresse' => 'arafat nktt'
        ]);

        Entity::firstOrCreate([
            'name' => 'centre leksar',
            'adresse' => 'leksar nktt'
        ]);
    }
}

