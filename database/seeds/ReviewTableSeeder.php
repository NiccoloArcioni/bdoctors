<?php

use Illuminate\Database\Seeder;
use App\Review;
use App\User;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 

            $voto = rand(1,5);
            $new_review = new Review();

            $doctorCount = User::count();
            $new_review->doctor_id = rand(1,$doctorCount);

            $new_review->name_user = 'Niccolo\'';
            $new_review->surname_user = 'Arcioni';
            $new_review->vote_user =  $voto;
            $new_review->review_user = 'Lorem ipsum is simply dummy text of the printing and typesetting industry.';
            $new_review->save();
        }
    }
}
