<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetTextContent extends Model
{
    use HasFactory;

    protected $table = 'text_content';

    protected $fillable = ['OriginalText', 'OriginalLanguageID']; 
}
