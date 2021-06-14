<?php

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
        $this->call(UserTableSeeder::class);
        $this->call(SpecializationTableSeeder::class);
        $this->call(ReviewTableSeeder::class);
        $this->call(MessageTableSeeder::class);
        $this->call(AdvertiseTableSeeder::class);
        $this->call(SpecializationUserTableSeeder::class);
        $this->call(AdvertiseDoctorTableSeeder::class);
    }
}
