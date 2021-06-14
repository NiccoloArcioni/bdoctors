<?php

use Illuminate\Database\Seeder;
use App\Specialization;

class SpecializationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specializzazioni = ['Allergologia' , 
                'Dermatologia' , 
                'Endocrinologia', 
                'Chirurgia', 
                'Ortopedia', 
                'Neurochirurgia', 
                'Cardiochirurgia' ,
                'Radioterapia' , 
                'Farmacologia', 
                'Oncologia' , 
                'Pediatria' , 
                'Odontoiatria' , 
                'Ginecologia', 
                'Fisioterapia'];

        sort($specializzazioni); 

        foreach ($specializzazioni as $element) {
            $new_specialization = new Specialization();
            $new_specialization-> specialization = $element;

            $new_specialization->save();

        }
    }
}
