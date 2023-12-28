<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
  {
    return view('index');
  }
  public function confirm(ContactRequest $request)
  {
    $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building','type', 'detail']);
    return view('confirm', compact('contact'));
  }
  public function store(ContactRequest $request)
  {
    $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'type', 'detail']);
        Contact::create($contact);
        return view('thanks');
  }
    public function find()
    {
        return view('find', ['input' => '']);
    }
    public function search(Request $request)
    {
        $input = $request->input;

        $item = Contact::where('first_name', 'LIKE',"%{$request->input}%")
            ->orWhere('email', 'LIKE', "%{$request->input}%")
            ->get();
        $param = [
            'input' => $input,
            'item' => $item
        ];
        return view('find', $param);
    }
}