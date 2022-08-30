<?php

namespace IsaacPawley\ModuleSandpit\Database\Seeders;

use Illuminate\Database\Seeder;
use IsaacPawley\ModuleSandpit\Models\Contacts;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contacts::factory(10)->create();
    }
}
