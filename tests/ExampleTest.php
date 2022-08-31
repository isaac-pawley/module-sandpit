<?php

use Inertia\Inertia;
use Inertia\Testing\AssertableInertia as Assert;
use IsaacPawley\ModuleSandpit\Models\Contacts;

beforeEach()->refreshDatabase();

it('can test', function () {
    $contacts = Contacts::factory(1)->create();

    $response = $this->makeMockRequest(
        Inertia::render('Contacts/Index', [
            'contacts' => Contacts::all()
        ])
    );

    $response->assertInertia(fn(Assert $page) => $page
        ->component('Contacts/Index')
        ->has('contacts', 1, fn(Assert $page) => $page
            ->where('id', $contacts->first()->id)
            ->where('title', $contacts->first()->title)
            ->where('name', $contacts->first()->name)
            ->where('role', $contacts->first()->role)
            ->where('email', $contacts->first()->email)
            ->etc()
        )
    );
});
