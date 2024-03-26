<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // profils seeders
        DB::table('profils')->insert([
            'nom_profil' => 'President',
            'created_at'=> now(+1),
            'updated_at' => now(+1),
        ]);
        DB::table('profils')->insert([
            'nom_profil' => 'Secretaire',
            'created_at'=> now(+1),
            'updated_at' => now(+1),
        ]);
        DB::table('profils')->insert([
            'nom_profil' => 'Tresorier',
            'created_at'=> now(+1),
            'updated_at' => now(+1),
        ]);
        DB::table('profils')->insert([
            'nom_profil' => 'Membre',
            'created_at'=> now(+1),
            'updated_at' => now(+1),
        ]);



        //users seeders
        DB::table('users')->insert([
            'name' => 'junior',
            'surname'=>'lk',
            'sex'=>'Masculin',
            'number'=>699999999,
            'email' => 'juniorlekeu@gmail.com',
            'password' => Hash::make('junior'),
            'profil_id'=>1,
            'created_at'=> now(+1),
            'updated_at' => now(+1),
        ]);
        DB::table('users')->insert([
            'name' => 'arnold',
            'surname'=>'tfoa2',
            'sex'=>'Masculin',
            'number'=>699999999,
            'email' => 'arnold@gmail.com',
            'password' => Hash::make('arnold'),
            'profil_id'=>2,
            'created_at'=> now(+1),
            'updated_at' => now(+1),
        ]);
        DB::table('users')->insert([
            'name' => 'borel',
            'surname'=>'borel',
            'sex'=>'Masculin',
            'number'=>699999999,
            'email' => 'borel@gmail.com',
            'password' => Hash::make('borel'),
            'profil_id'=>3,
            'created_at'=> now(+1),
            'updated_at' => now(+1),
        ]);
        DB::table('users')->insert([
            'name' => 'gladys',
            'surname'=>'gladys',
            'sex'=>'Feminin',
            'number'=>699999999,
            'email' => 'gladys@gmail.com',
            'password' => Hash::make('gladys'),
            'profil_id'=>4,
            'created_at'=> now(+1),
            'updated_at' => now(+1),
        ]);


        //notifications seeders

        DB::table('notifications')->insert([
            'description' => "Notification : Vous avez reçu un nouvel email de John Doe. Sujet : Réunion de demain. Bonjour, n'oubliez pas notre réunion de demain à 10h. Cordialement, John.",
            'user_id'=>1,
            'created_at'=> now(+1),
            'updated_at' => now(+1),
        ]);
        DB::table('notifications')->insert([
            'description' => "Notification : Vous avez reçu un nouvel email de John Doe. Sujet : Réunion de demain. Bonjour, n'oubliez pas notre réunion de demain à 10h. Cordialement, John.",
            'user_id'=>2,
            'created_at'=> now(+1),
            'updated_at' => now(+1),
        ]);
        DB::table('notifications')->insert([
            'description' => "Notification : Vous avez reçu un nouvel email de John Doe. Sujet : Réunion de demain. Bonjour, n'oubliez pas notre réunion de demain à 10h. Cordialement, John.",
            'user_id'=>3,
            'created_at'=> now(+1),
            'updated_at' => now(+1),
        ]);
        DB::table('notifications')->insert([
            'description' => "Notification : Vous avez reçu un nouvel email de John Doe. Sujet : Réunion de demain. Bonjour, n'oubliez pas notre réunion de demain à 10h. Cordialement, John.",
            'user_id'=>4,
            'created_at'=> now(+1),
            'updated_at' => now(+1),
        ]);


        DB::table('malheurs')->insert([
            'type' => "Aide père",
            'user_id'=>1,
            'created_at'=> now(+1),
            'updated_at' => now(+1),
        ]);
        DB::table('malheurs')->insert([
            'type' => "Aide mère",
            'user_id'=>1,
            'created_at'=> now(+1),
            'updated_at' => now(+1),
        ]);
        DB::table('malheurs')->insert([
            'type' => "Aide père",
            'user_id'=>2,
            'created_at'=> now(+1),
            'updated_at' => now(+1),
        ]);
        DB::table('malheurs')->insert([
            'type' => "Aide mère",
            'user_id'=>2,
            'created_at'=> now(+1),
            'updated_at' => now(+1),
        ]);
        DB::table('malheurs')->insert([
            'type' => "Aide père",
            'user_id'=>3,
            'created_at'=> now(+1),
            'updated_at' => now(+1),
        ]);
        DB::table('malheurs')->insert([
            'type' => "Aide mère",
            'user_id'=>3,
            'created_at'=> now(+1),
            'updated_at' => now(+1),
        ]);
        DB::table('malheurs')->insert([
            'type' => "Aide père",
            'user_id'=>4,
            'created_at'=> now(+1),
            'updated_at' => now(+1),
        ]);
        DB::table('malheurs')->insert([
            'type' => "Aide mère",
            'user_id'=>4,
            'created_at'=> now(+1),
            'updated_at' => now(+1),
        ]);

    }
}
