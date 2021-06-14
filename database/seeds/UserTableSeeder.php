<?php

use Illuminate\Database\Seeder;
use App\User;

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
        $doctors = include('config\doctor.php');

        foreach ($doctors as $doctor) {
            $new_doctor = new User();
            $countDoctor = User::count() + 1;
            $new_doctor->firstname = $doctor['firstname'];
            $new_doctor->lastname = $doctor['lastname'];
            $new_doctor->address = $doctor['address'];
            $new_doctor->city = $doctor['city'];
            $new_doctor->email = $doctor['email'];
            $new_doctor->password = $doctor['password'];
            $new_doctor->telephone = $doctor['telephone'];
            $new_doctor->photo = $doctor['photo'];
            $new_doctor->cv = $doctor['cv'];
            
            $new_doctor->save();
        }
    }
}