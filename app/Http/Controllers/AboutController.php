<?php

namespace App\Http\Controllers;

use App\Models\GetAboutUs;
use Illuminate\Http\Request;

use Inertia\Inertia;

class AboutController extends Controller
{
    public function show(AboutController $data, Request $request)
    {
        $locale = $request->route()->getPrefix();
        $text_id = GetAboutUs::select('Description')->first();
        $text = get_text($text_id["Description"], substr($locale, 1));
        $img = GetAboutUs::select('Image')->first();

        $req = [
            "Text" => $text, 
            "Image" => $img["Image"]
        ];

        return Inertia::render('About/Index', [
            'data' => $req,
        ]);
    }
}