<?php

namespace Database\Seeders;

use App\Models\entity;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::truncate();
        DB::table('role_user')->truncate();

        $directeur = User::create([
            'name' => 'directeur',
            'email' => 'directeur@gmail.com',
            'password' => Hash::make('20593670'),
            'entity_id' => '1'
        ]);
        $administrateur = User::create([
            'name' => 'administrateur',
            'email' => 'administrateur@gmail.com',
            'password' => Hash::make('20593670'),
            'entity_id' => '2'
        ]);
        $agent = User::create([
            'name' => 'agent',
            'email' => 'agent@gmail.com',
            'password' => Hash::make('20593670'),
            'entity_id' => '3'
        ]);

        $directeurRole = Role::where('name', 'directeur')->first();
        $administrateurRole = Role::where('name', 'administrateur')->first();
        $agentRole = Role::where('name', 'agent')->first();

        $directeurEntity = entity::where('name', 'centre principale')->first();
        $administrateurEntity = entity::where('name', 'centre principale')->first();
        $agentEntity = entity::where('name', 'centre principale')->first();

        $directeur->roles()->attach($directeurRole);
        $administrateur->roles()->attach($administrateurRole);
        $agent->roles()->attach($agentRole);

        $directeur->entity()->associate($directeurEntity)->save();
        $administrateur->entity()->associate($administrateurEntity)->save();
        $agent->entity()->associate($agentEntity)->save();
    }
}
