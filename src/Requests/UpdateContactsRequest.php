<?php

namespace IsaacPawley\ModuleSandpit\Requests;

use Illuminate\Foundation\Http\FormRequest;
use IsaacPawley\ModuleSandpit\DataTransferObjects\UpdateContactsDTO;

class UpdateContactsRequest extends FormRequest
{
    public function authorize(): bool
    {
        dd($this->contact);

        return $this->user()?->can('update', $this->contact) ?: false;
    }

    public function rules(): array
    {
        return [
            'title' => [
                'required',
            ],
            'name' => [
                'required',
            ],
            'role' => [
                'required',
            ],
            'email' => [
                'required',
                'email',
            ],
        ];
    }

    public function data(): UpdateContactsDTO
    {
        return UpdateContactsDTO::fromRequest($this);
    }
}
