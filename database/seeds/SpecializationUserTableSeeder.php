<?php

use Illuminate\Database\Seeder;
use App\Specialization;
use App\User;
class SpecializationUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $doctors = config('doctor) */
        /* se non funziona config usare include */
        $doctors = include('config\doctor.php');

        foreach ($doctors as $doctor) {
            $new_doctor = User::where('email', $doctor['email'])->first();
            $new_doctor->specializations()->sync([random_int(1, 14)]);
        }
    }
}
