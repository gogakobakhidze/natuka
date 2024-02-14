<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetContact extends Model
{
    use HasFactory;

    protected $table = 'contact';

    protected $fillable = ['Phone', 'Email', 'Fb', 'Ins', 'Ln', 'Be']; 
}
