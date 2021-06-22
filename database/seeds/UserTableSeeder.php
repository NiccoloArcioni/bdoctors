<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $doctors = config('doctor'); */
        /* se non funziona config usare include */
        $data = include('config\doctor.php');
        $performances = [
            'In studio',
            'Da remoto',
            'Sia in studio che da remoto'
        ];

        for ($i = 0; $i < 390; $i++) {
            $new_doctor = new User();
            $new_doctor->firstname = $data['names'][rand(0, 19)];
            $new_doctor->lastname = $data['lastnames'][rand(0, 19)];
            $new_doctor->address = $data['addresses'][rand(0, 19)];
            $new_doctor->city = $data['cities'][rand(0, 19)];
            $new_doctor->photo = $data['images'][rand(0, 19)];
            $new_doctor->email = $new_doctor->firstname . $new_doctor->lastname . rand(1, 20000) . '@gmail.com';
            $new_doctor->password = Hash::make('mario1234');
            $new_doctor->cv = $data['cv'][rand(0, 19)];
            $rnd_telephone = strval(rand(1111111111, intval(9999999999)));
            $new_doctor->performance = $performances[rand(0, 2)];
            $new_doctor->telephone = $rnd_telephone;

            $new_doctor->save();
        }
    }
}