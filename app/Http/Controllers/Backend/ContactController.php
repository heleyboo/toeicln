<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ContactRepository;


class ContactController extends Controller {
    protected $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function index() 
    {
        $contacts = $this->contactRepository->page();
        return view('backend.contacts.index', compact('contacts'));
    }

    public function getById($contactId)
    {
        $contact = $this->contactRepository->getById($contactId);
        return view('backend.contacts.edit', compact('contact'));
    }

    public function update(Request $request, $contactId)
    {
        $this->contactRepository->update($contactId, $request->all());
        return redirect()->route('backend_contacts_index');
    }

    public function add(Request $request)
    {
        $this->contactRepository->store($request->all());
        return redirect()->route('backend_contacts_index');
    }

    public function getForm()
    {
        return view('backend.contacts.add');
    }

    public function delete($contactId)
    {
        $this->contactRepository->destroy($contactId);
        return redirect()->route('backend_contacts_index');
    }
}