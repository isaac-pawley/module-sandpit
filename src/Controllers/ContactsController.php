<?php

namespace IsaacPawley\ModuleSandpit\Controllers;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use IsaacPawley\ModuleSandpit\Contracts\ContactsRepositoryInterface;
use IsaacPawley\ModuleSandpit\Models\Contacts;
use IsaacPawley\ModuleSandpit\Requests\StoreContactsRequest;
use IsaacPawley\ModuleSandpit\Requests\UpdateContactsRequest;

class ContactsController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(private readonly ContactsRepositoryInterface $contactsRepository)
    {
    }

    public function index(): Responsable
    {
        return $this->contactsRepository->indexContacts();
    }

    public function create(): Responsable
    {
        return $this->contactsRepository->createContact();
    }

    public function store(StoreContactsRequest $request): RedirectResponse
    {
        $contactName = $this->contactsRepository->saveContact($request->data());

        return redirect(route('contacts.index'))->with([
            'flash' => [
                'bannerStyle' => 'success',
                'banner' => 'Huzzah!!!! '.$contactName.' was created',
            ],
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Responsable
     */
    public function edit(int $id): Responsable
    {
        return $this->contactsRepository->editContact($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateContactsRequest  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(UpdateContactsRequest $request, int $id): RedirectResponse
    {
        $contactName = $this->contactsRepository->updateContact($id, $request->data());

        return redirect(route('contacts.index'))->with([
            'flash' => [
                'bannerStyle' => 'success',
                'banner' => 'Huzzah!!!! '.$contactName.' was updated',
            ],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Contacts  $contact
     * @return RedirectResponse
     */
    public function destroy(Contacts $contact): RedirectResponse
    {
        $contact->delete();

        return redirect(route('contacts.index'))->with([
            'flash' => [
                'bannerStyle' => 'danger',
                'banner' => 'Success! Contact deleted',
            ],
        ]);
    }
}
