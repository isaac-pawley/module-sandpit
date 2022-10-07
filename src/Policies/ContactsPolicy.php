<?php

namespace IsaacPawley\ModuleSandpit\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use IsaacPawley\ModuleSandpit\Models\Contacts;

class ContactsPolicy
{
    use HandlesAuthorization;

    public function viewAny(): bool
    {
        return true;
    }

    public function view(): bool
    {
        return true;
    }

    // @phpstan-ignore-next-line
    public function create(User $user): bool
    {
        return $user->name !== 'Isaac Pawley'; // @phpstan-ignore-line
    }

    // @phpstan-ignore-next-line
    public function update(User $user, Contacts $contact): bool
    {
        return $user->name === 'Isaac Pawley'; // @phpstan-ignore-line
    }

    // @phpstan-ignore-next-line
    public function delete(User $user, Contacts $contacts): bool
    {
        return $user->name === 'Isaac Pawley'; // @phpstan-ignore-line
    }

    // @phpstan-ignore-next-line
    public function restore(User $user, Contacts $contacts): bool
    {
        return $user->name === 'Isaac Pawley'; // @phpstan-ignore-line
    }

    // @phpstan-ignore-next-line
    public function forceDelete(User $user, Contacts $contacts): bool
    {
        return $user->name === 'Isaac Pawley'; // @phpstan-ignore-line
    }
}
