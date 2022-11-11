<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function add(ContactRequest $request)
    {
        $form = $request->all();
        Contact::create($form);
        return view('thanks');
    }
}
