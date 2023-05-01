<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Team;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserTableSeeder::class);
        Setting::factory(1)->create();
        Contact::factory(20)->create();
        Team::factory(2)->create();
        Service::factory(1)->create();
        Gallery::factory(6)->create();

    }
}
