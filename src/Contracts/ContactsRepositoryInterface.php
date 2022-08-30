<?php

namespace IsaacPawley\ModuleSandpit\Contracts;

use IsaacPawley\ModuleSandpit\DataTransferObjects\StoreContactsDTO;

interface ContactsRepositoryInterface
{
    public function createContact(StoreContactsDTO $contactDTO): string;
}
