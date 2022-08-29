<?php

namespace IsaacPawley\ModuleSandpit\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \IsaacPawley\ModuleSandpit\ModuleSandpit
 */
class ModuleSandpit extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \IsaacPawley\ModuleSandpit\ModuleSandpit::class;
    }
}
