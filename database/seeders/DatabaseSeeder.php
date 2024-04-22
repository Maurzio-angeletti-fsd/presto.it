<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Plan;
use App\Models\User;
use App\Models\Announcement;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'A-team',
            'email' => 'ateam@example.it',
            'password' => 'ateam123',
            'is_revisor'=> true

        ]);

        User::factory()->create([
            'name' => 'John Hannibal Smith ',
            'email' => 'hannibal@example.it',
            'password' => 'hannibal123',
        ]);

        User::factory()->create([
            'name' => 'Antoinette Stamm',
            'email' => 'lizzie12@example.org',
            'password' => 'lizzie123',
        ]);

        User::factory()->create([
            'name' => 'Maudie Brown',
            'email' => 'easter.rogahn@example.org',
            'password' => 'easter123',
        ]);


        User::factory()->create([
            'name' => 'Jaleel Johnson',
            'email' => 'buckridge.franco@example.net',
            'password' => 'buckridge123',
        ]);

        User::factory()->create([
            'name' => 'Amira Hayes',
            'email' => 'amira@example.net',
            'password' => 'amira123',
        ]);

        User::factory()->create([
            'name' => 'Gust Beatty',
            'email' => 'gust@example.net',
            'password' => 'gust1234',
        ]);

        User::factory()->create([
            'name' => 'Mr. Cloyd Herzog',
            'email' => 'cloyd@example.net',
            'password' => 'cloyd1234',
        ]);


        User::factory()->create([
            'name' => 'Garrison Kovacek',
            'email' => 'garrison@example.net',
            'password' => 'garrison123',
        ]);

        User::factory()->create([
            'name' => 'Carroll Wolf',
            'email' => 'carroll@example.net',
            'password' => 'carroll123',
        ]);

        Plan::create([

            'slug' => 'premium mensile',
            'price' => '1200',
            'duration_in_days' => 30,
            'stripe_id' => 'prod_PuTL6mYdZA6RgC',
            'stripe_price' => 'price_1P6HakGSRy6U28xgXY0IyTiD'

        ]);

        Plan::factory()->create([

            'slug' => 'premium  annuale',
            'price' => '9999',
            'duration_in_days' => 365,
            'stripe_id' => 'prod_PuTL6mYdZA6RgC',
            'stripe_price' => 'price_1P6HbqGSRy6U28xgJL6T9L2u'

        ]);

        Plan::factory()->create([

            'slug' => 'base mensile',
            'price' => '500',
            'duration_in_days' => 30,
            'stripe_id' => 'prod_Pw9x74mKW0TtwM',
            'stripe_price' => 'price_1P6HdEGSRy6U28xglots09Ix'

        ]);

        Plan::factory()->create([

            'slug' => 'base annuale',
            'price' => '4500',
            'duration_in_days' => 365,
            'stripe_id' => 'prod_Pw9x74mKW0TtwM',
            'stripe_price' => 'price_1P6HesGSRy6U28xgQLevA77T',
            

        ]);

        


        // User::factory(25)->create();


        // Announcement::factory(40)->create();


    }
}
