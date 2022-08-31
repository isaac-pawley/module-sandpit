<?php

namespace IsaacPawley\ModuleSandpit\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use IsaacPawley\ModuleSandpit\Database\Factories\ContactsFactory;

/**
 * @property string $name
 * @property string $title
 * @property string $role
 * @property string $email
 */
class Contacts extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return ContactsFactory::new();
    }
}
