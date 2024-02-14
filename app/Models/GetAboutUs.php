<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetAboutUs extends Model
{
    use HasFactory;

    protected $table = 'about_us';

    protected $fillable = ['Name_en', 'Name_de', 'Description_en', 'Description_de', 'Image']; 
}
