<?php

namespace IsaacPawley\ModuleSandpit\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Inertia\Inertia;
use Inertia\Response;
use IsaacPawley\ModuleSandpit\Contracts\ContactsRepositoryInterface;
use IsaacPawley\ModuleSandpit\Models\Contacts;
use IsaacPawley\ModuleSandpit\Requests\StoreContactsRequest;
use IsaacPawley\ModuleSandpit\Requests\UpdateContactsRequest;

class ContactsController extends Controller
{
    public function __construct(private readonly ContactsRepositoryInterface $contactsRepository) {}

    public function index()
    : Response
    {
        return Inertia::render('Contacts/Index', [
            'contacts' => Contacts::all()
        ]);
    }

    public function create()
    : Response
    {
        return Inertia::render('Contacts/Create');
    }

    public function store(StoreContactsRequest $request)
    : RedirectResponse {
        $contactName = $this->contactsRepository->createContact($request->data());

        return redirect(route('contacts.index'))->with([
            'flash' => [
                'bannerStyle' => 'success',
                'banner'      => 'Huzzah!!!! '.$contactName.' was created'
            ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Contacts  $contact
     * @return Response
     */
    public function edit(Contacts $contact)
    : Response {
        return Inertia::render('Contacts/Edit', [
            'contact' => $contact
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateContactsRequest  $request
     * @param  Contacts  $contact
     * @return RedirectResponse
     */
    public function update(UpdateContactsRequest $request, Contacts $contact)
    : RedirectResponse {
        $contact->update($request->toArray());

        return redirect(route('contacts.index'))->with([
            'flash' => [
                'bannerStyle' => 'success',
                'banner'      => 'Huzzah!!!! '.$contact->name.' was updated'
            ]
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Contacts  $contact
     * @return RedirectResponse
     */
    public function destroy(Contacts $contact)
    : RedirectResponse {
        $contact->delete();

        return redirect(route('contacts.index'))->with([
            'flash' => [
                'bannerStyle' => 'danger',
                'banner'      => 'Success! Contact deleted'
            ]
        ]);
    }
}
