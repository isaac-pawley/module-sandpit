<?php

namespace IsaacPawley\ModuleSandpit\Contracts;

use Illuminate\Contracts\Support\Responsable;
use Inertia\Response;
use IsaacPawley\ModuleSandpit\DataTransferObjects\StoreContactsDTO;
use IsaacPawley\ModuleSandpit\DataTransferObjects\UpdateContactsDTO;

interface ContactsRepositoryInterface
{
    public function indexContacts(): Responsable;
    public function editContact(int $id): Responsable;
    public function createContact(): Response;
    public function saveContact(StoreContactsDTO $contactDTO): string;
    public function updateContact(int $id, UpdateContactsDTO $contactDTO): string;
}
