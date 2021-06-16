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
        $specializzazioni = [
            'Allergologo',
            'Anatomopatologo',
            'Andrologo',
            'Anestesista',
            'Angiologo',
            'Audioprotesista',
            'Cardiochirurgo',
            'Cardiologo',
            'Chiropratico',
            'Chirurgo',
            'Chirurgo Estetico',
            'Chirurgo Generale',
            'Chirurgo Maxillo Facciale',
            'Chirurgo Pediatrico',
            'Chirurgo Plastico',
            'Chirurgo Toracico',
            'Chirurgo Vascolare',
            'Chirurgo Vertebrale',
            'Covidtest',
            'Dentista',
            'Dermatologo',
            'Diabetologo',
            'Dietista',
            'Dietologo',
            'Ematologo',
            'Endocrinologo',
            'Epatologo',
            'Epidemiologo',
            'Fisiatra',
            'Fisioterapista',
            'Gastroenterologo',
            'Geriatra',
            'Ginecologo',
            'Immunologo',
            'Infettivologo',
            'Internista',
            'Logopedista',
            'Massofisioterapista',
            'Medico Certificatore',
            'Medico Competente',
            'Medico Dello Sport',
            'Medico Di Base',
            'Medico Legale',
            'Medico Nucleare',
            'Nefrologo',
            'Neurochirurgo',
            'Neurologo',
            'Neuropsichiatra Infantile',
            'Nutrizionista',
            'Oculista',
            'Omeopata',
            'Oncologo',
            'Ortodontista',
            'Ortopedico',
            'Osteopata',
            'Ostetrica',
            'Otorino',
            'Pediatra',
            'Pneumologo',
            'Podologo',
            'Posturologo',
            'Proctologo',
            'Professional Counselor',
            'Psichiatra',
            'Psicologo',
            'Psicologo Clinico',
            'Psicoterapeuta',
            'Radiologo',
            'Radiologo Diagnostico',
            'Radioterapista',
            'Reumatologo',
            'Senologo',
            'Sessuologo',
            'Stomatologo',
            'Tecnico Sanitario',
            'Terapeuta',
            'Terapista Del Dolore',
            'Urologo'];

        sort($specializzazioni); 

        foreach ($specializzazioni as $element) {
            $new_specialization = new Specialization();
            $new_specialization-> specialization = $element;

            $new_specialization->save();

        }
    }
}
