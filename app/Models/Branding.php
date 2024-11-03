<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branding extends Model
{
    use HasFactory;

    protected $table = 'brandings';

    protected $fillable = [
        'branding_name',
        'branding_image',
      ];
}