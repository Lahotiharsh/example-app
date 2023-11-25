<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        use App\Models\Song;

        /**
         * Run the database seeds.
         */
        public function run(): void
        {
    
            // Seed a few songs
            Song::create([
                'artist' => 'Eminem',
                'title' => 'Stan',
            ]);
    
            Song::create([
                'artist' => 'A P Dhillon',
                'title' => 'With You',
            ]);
    
        } // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
