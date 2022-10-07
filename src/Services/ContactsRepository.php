<?php

namespace IsaacPawley\ModuleSandpit\Services;

use Illuminate\Contracts\Support\Responsable;
use Inertia\Inertia;
use Inertia\Response;
use IsaacPawley\ModuleSandpit\Contracts\ContactsRepositoryInterface;
use IsaacPawley\ModuleSandpit\DataTransferObjects\StoreContactsDTO;
use IsaacPawley\ModuleSandpit\DataTransferObjects\UpdateContactsDTO;
use IsaacPawley\ModuleSandpit\Models\Contacts;

class ContactsRepository implements ContactsRepositoryInterface
{
    public function indexContacts(): Responsable
    {
        return Inertia::render('Contacts/Index', [
            'contacts' => Contacts::all(),
        ]);
    }
    public function editContact(int $id): Responsable
    {
        return Inertia::render('Contacts/Edit', [
            'contact' => Contacts::find($id),
        ]);
    }

    public function createContact(): Response
    {
        return Inertia::render('Contacts/Create');
    }

    public function saveContact(StoreContactsDTO $contactDTO): string
    {
        $contact = Contacts::query()->create((array) $contactDTO);

        return $contact->name;
    }

    public function updateContact(int $id, UpdateContactsDTO $contactDTO): string
    {
        $contact = Contacts::query()->find($id);
        $contact->update((array) $contactDTO);
//        $contact->save();

        return $contact->name;
    }
}
