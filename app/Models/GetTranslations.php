<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetTranslations extends Model
{
    use HasFactory;
    
    protected $table = 'translations';

    protected $fillable = ['TextContentID', 'LanguageID', 'Translation']; 
}
