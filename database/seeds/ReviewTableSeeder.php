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
        $reviews = include('config\review.php');

        for ($i=1; $i <= User::count(); $i++) { 
            foreach ($reviews as $review) {
                $voto = rand(1,5);
                $new_review = new Review();
                $new_review->doctor_id = $i;
                $new_review->name_user = $review['name_user'];
                $new_review->surname_user = $review['surname_user'];
                $new_review->vote_user = $voto;
                $new_review->review_user = $review['review_user'];
                $new_review->created_at = $review['create_at'];
                $new_review->updated_at = $review['updated_at'];
                $new_review->save();
            }
        }
    }
}
