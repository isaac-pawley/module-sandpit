<?php

namespace IsaacPawley\ModuleSandpit\Services;

use IsaacPawley\ModuleSandpit\Contracts\ContactsRepositoryInterface;
use IsaacPawley\ModuleSandpit\DataTransferObjects\StoreContactsDTO;
use IsaacPawley\ModuleSandpit\Models\Contacts;

class ContactsRepository implements ContactsRepositoryInterface
{
    public function createContact(StoreContactsDTO $contactDTO)
    : string
    {
        $contact = Contacts::query()->create((array) $contactDTO);

        return $contact->name;
    }
}
