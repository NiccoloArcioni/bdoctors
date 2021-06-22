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
        /* $data = include('config\doctor.php'); */

        /* foreach ($doctors as $doctor) {
            $new_doctor = User::where('email', $doctor['email'])->first();
            for ($i=0; $i < 3; $i++) { 
                do {
                    $rnd = random_int(1, 78);
                } while($new_doctor->specializations->specialization_id == $rnd);
                $new_doctor->specializations()->sync([$rnd]);
            }
        } */

        for ($i=1; $i <= User::count(); $i++) { 
            $rnd = rand(1, 78);
            do {
                $rnd2 = rand(1, 78);
            } while($rnd2 == $rnd);
            do {
                $rnd3 = rand(1, 78);
            } while($rnd3 == $rnd2 || $rnd3 == $rnd);
            $new_doctor = User::where('id', $i)->first();
            $new_doctor->specializations()->sync([$rnd, $rnd2, $rnd3]);
        }
    }
}
