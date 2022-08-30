<?php

namespace IsaacPawley\ModuleSandpit\Requests;

use IsaacPawley\ModuleSandpit\DataTransferObjects\StoreContactsDTO;
use IsaacPawley\ModuleSandpit\Models\Contacts;
use Illuminate\Foundation\Http\FormRequest;

class StoreContactsRequest extends FormRequest
{
    public function authorize()
    : bool
    {
        return $this->user()?->can('create', Contacts::class) ?: false;
    }

    public function rules()
    : array
    {
        return [
            'title' => [
                'required',
            ],
            'name'  => [
                'required',
            ],
            'role'  => [
                'required',
            ],
            'email' => [
                'required',
                'email',
            ],
        ];
    }

    public function data()
    : StoreContactsDTO
    {
        return StoreContactsDTO::fromRequest($this);
    }
}
