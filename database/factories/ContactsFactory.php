<?php

namespace IsaacPawley\ModuleSandpit\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use IsaacPawley\ModuleSandpit\Models\Contacts;

/**
 * @extends Factory<Contacts>
 */
class ContactsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'title' => $this->faker->jobTitle(),
            'role' => $this->faker->word(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
