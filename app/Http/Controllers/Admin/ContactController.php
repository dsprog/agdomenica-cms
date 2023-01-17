<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = \App\Models\Contact::orderBy('id', 'desc')->paginate(10);
        return view('admin.contact.index', compact('contacts'));
    }

    public function show($id)
    {
        $contact = \App\Models\Contact::findOrFail($id);
        return view('admin.contact.show', compact('contact'));
    }

    public function destroy($contact)
    {
        $contact = \App\Models\Contact::findOrFail($contact);
        $contact->delete();
        return redirect()->route('admin.contacts.index')
            ->banner('Contato excluído com sucesso!');
    }
}
