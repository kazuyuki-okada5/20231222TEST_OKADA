<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function admin()
    {
    $contacts = Contact::Paginate(10);
        return view('admin', ['contacts' => $contacts]);
    }
}
