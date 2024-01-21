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
            'name' => 'President',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);
        DB::table('profils')->insert([
            'name' => 'Secretaire',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);
        DB::table('profils')->insert([
            'name' => 'Tresorier',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);
        DB::table('profils')->insert([
            'name' => 'Membre',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);



        //users seeders
        DB::table('users')->insert([
            'name' => 'junior',
            'surname'=>'lk',
            'sex'=>'M',
            'email' => 'junior@gmail.com',
            'password' => Hash::make('junior'),
            'profil_id'=>1,
            'created_at'=> now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'arnold',
            'surname'=>'tfoa2',
            'sex'=>'M',
            'email' => 'arnold@gmail.com',
            'password' => Hash::make('arnold'),
            'profil_id'=>2,
            'created_at'=> now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'borel',
            'surname'=>'borel',
            'sex'=>'M',
            'email' => 'borel@gmail.com',
            'password' => Hash::make('borel'),
            'profil_id'=>3,
            'created_at'=> now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'gladys',
            'surname'=>'gladys',
            'sex'=>'F',
            'email' => 'gladys@gmail.com',
            'password' => Hash::make('gladys'),
            'profil_id'=>4,
            'created_at'=> now(),
            'updated_at' => now(),
        ]);
    }
}
