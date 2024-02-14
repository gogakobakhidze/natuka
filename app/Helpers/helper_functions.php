<?php

namespace App\Http\Controllers;

use App\Models\GetLanguages;
use App\Models\GetTextContent;
use App\Models\GetTranslations;

//get language by ID and language code

function get_text($id, $locale) {    
    $locale_code = GetLanguages::where('LanguageName', $locale)->first();
    $text = GetTranslations::where('TextContentID', $id)
                            ->where('LanguageID', $locale_code["ID"])
                            ->first();
    return $text["Translation"];
} 