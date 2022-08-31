<?php

namespace IsaacPawley\ModuleSandpit\Database\Factories;

use IsaacPawley\ModuleSandpit\Models\Contacts;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Contacts>
 */
class ContactsFactory extends Factory
{
    protected $model = Contacts::class;

    public function definition()
    : array
    {
        return [
            'name' => $this->faker->name(),
            'title' => $this->faker->jobTitle(),
            'role' => $this->faker->word(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
