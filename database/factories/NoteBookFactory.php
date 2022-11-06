<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NoteBook>
 */
class NoteBookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'family_name_first_name_patronymic' => 'Ivanov Ivan Ivanich',
            'phone' => '123456789',
            'email' => 'ivan@ivanov.ru',
            'company' => 'home',
            'birthday' => 1660338149,
            'photo' => 'https://ya.ru/ivanov.png'
        ];
    }
}
