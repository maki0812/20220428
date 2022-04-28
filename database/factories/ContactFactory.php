<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Contact::class;
    public function definition()
    {
        $gender=['男性','女性'];

        return [
        'name'=> $this->faker->name,
        'gender'=> $this->faker->randomElement($gender),
        'email'=> $this->faker->email,
        'postcode'=> $this->faker->postcode,
        'address'=> $this->faker->address,
        'building_name'=> $this->faker->secondaryAddress,
        'opinion'=> $this->faker->realText(20),
        ];
    }
}
