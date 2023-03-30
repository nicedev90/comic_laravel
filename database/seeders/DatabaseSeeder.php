<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email@g.com',
        //     'website' => 'http://google.com',
        //     'description' => 'loresm impus 5 sfsdj j¿'
        // ]);

        // Listing::create([
        //     'title' => 'Python Senior Developer',
        //     'tags' => 'python, javascript',
        //     'company' => 'Cobol Corp',
        //     'location' => 'London, GB',
        //     'email' => 'email@g.com',
        //     'website' => 'http://google.com',
        //     'description' => 'loresm impus 5 dat adata data'
        // ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
