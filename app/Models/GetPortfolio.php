<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetPortfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolio';

    protected $fillable = ['Home', 'Category', 'Name_en', 'Name_de', 'Description_en', 'Description_de', 'Icon', 'Image']; 
}
