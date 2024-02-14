<?php

namespace App\Http\Controllers;

use App\Models\GetContact;
use Illuminate\Http\Request;

use Inertia\Inertia;

class ContactController extends Controller
{
    public function show(ContactController $data)
    {
        $fetch = GetContact::where('ID', 1)->first();

        return Inertia::render('Contact/Index', [
            'data' => $fetch,
        ]);
    }
}