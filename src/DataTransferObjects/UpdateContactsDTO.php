<?php

namespace IsaacPawley\ModuleSandpit\DataTransferObjects;

use IsaacPawley\ModuleSandpit\Requests\UpdateContactsRequest;

class UpdateContactsDTO
{
    public function __construct(public string $name, public string $title, public string $role, public string $email)
    {
    }

    public static function fromRequest(UpdateContactsRequest $request): UpdateContactsDTO
    {
        return new self($request->input('name'), $request->input('title'), $request->input('role'), $request->input('email'));
    }
}
