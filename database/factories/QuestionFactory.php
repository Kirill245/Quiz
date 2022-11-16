<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        0 =>  [
            'questionId' => '1',
            'name' => 'Choose your favorite color:',
            'text' => 'Black/Green/Red',
        ],
            1 =>  [
                'questionId' => '2',
                'name' => 'What is your favorite subject?',
                'text' => 'Math/Informatic/Geography',
            ],
                2 =>  [
                    'questionId' => '3',
                    'name' => 'Do you like math?',
                    'text' => 'Yes/No',
                ],
                    3 =>  [
                        'questionId' => '4',
                        'name' => 'How much time you spend every day for progamming?',
                        'text' => '1 hour/2 hour',
                    ],
                        4 =>  [
                            'questionId' => '5',
                            'name' => 'Write your favorite number from 1 to 10?',
                            'text' => '...',
                        ],
                            5 =>  [
                                'questionId' => '6',
                                'name' => 'Do you prefer to work in team or solo?',
                                'text' => '...',
                            ],
        ];
    }
}
