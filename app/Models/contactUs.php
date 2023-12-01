<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactUs extends Model
{
    use HasFactory;
    protected $table = 'contact-us';
    protected $fillable = [
        'contact_name',
        'contact_email',
        'contact_phone',
        'contact_role',
        'message'
        
        
    ];
}
