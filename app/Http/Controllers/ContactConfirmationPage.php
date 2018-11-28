<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactConfirmationPage extends Controller
{
    public function confirmationPage()
    {
        return view('forms.contact_confirmation');
    }
}
