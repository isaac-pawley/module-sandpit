<?php

namespace IsaacPawley\ModuleSandpit\DataTransferObjects;

use IsaacPawley\ModuleSandpit\Requests\StoreContactsRequest;

class StoreContactsDTO
{
    public function __construct(public string $name, public string $title, public string $role, public string $email)
    {
    }

    public static function fromRequest(StoreContactsRequest $request): StoreContactsDTO
    {
        return new self($request->input('name'), $request->input('title'), $request->input('role'), $request->input('email'));
    }
}
