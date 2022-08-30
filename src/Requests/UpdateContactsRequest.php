<?php

namespace IsaacPawley\ModuleSandpit\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactsRequest extends FormRequest
{
    public function authorize(): bool
    {
//        dd($this->user()?->can('update', [$this->user(), $this->contact]));
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
}
