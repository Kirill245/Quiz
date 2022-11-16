<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AppModelsQuestion::factory()->count(10)->create()->each(function ($question) {
            $question->save();
            });
    }
}
