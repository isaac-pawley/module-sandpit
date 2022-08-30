<?php

namespace IsaacPawley\ModuleSandpit\Policies;

use IsaacPawley\ModuleSandpit\Models\Contacts;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ContactsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Contacts $contacts)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->name === 'Isaac Pawley';
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  User  $user
     * @param  Contacts  $contact
     * @return Response|bool
     */
    public function update(User $user, Contacts $contact)
    {
        return $user->name === 'Isaac Pawley';
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Contacts $contacts)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Contacts $contacts)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Contacts $contacts)
    {
        //
    }
}
