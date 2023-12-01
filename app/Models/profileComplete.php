<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profileComplete extends Model
{
    use HasFactory;
    protected $table = 'profile_completes';
    protected $fillable = [
        'idea',
        'qualification',
        'experience',
        'ambition',
        'creativity',
        'capacity_finance',
        'invest_money',
        'smallBusiness_plan',
        'file',
        'extension',
        'filesize',
        'aboutme',
        'potential_revenue',
        'current_finance',
        'needed_finance',
        'drive_you',
        'staff',
        'intro_owner',
        'require_revenue'

         
    ];
}
