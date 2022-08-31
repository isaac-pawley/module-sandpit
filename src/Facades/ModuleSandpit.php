<?php

namespace IsaacPawley\ModuleSandpit\Facades;

use Illuminate\Support\Facades\Facade;
use IsaacPawley\ModuleSandpit\Controllers\ContactsController;

/**
 * @see \IsaacPawley\ModuleSandpit\Controllers\ContactsController
 */
class ModuleSandpit extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ContactsController::class;
    }
}
