<?php

namespace IsaacPawley\ModuleSandpit\Policies;

use App\Models\User;
use IsaacPawley\ModuleSandpit\Models\Contacts;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny()
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Contacts $contacts)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user) // @phpstan-ignore-line
    {
        return $user->name === 'Isaac Pawley'; // @phpstan-ignore-line
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Contacts $contact) // @phpstan-ignore-line
    {
        return $user->name === 'Isaac Pawley'; // @phpstan-ignore-line
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Contacts $contacts)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Contacts $contacts)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Contacts $contacts)
    {
        //
    }
}
