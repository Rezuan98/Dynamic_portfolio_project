<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class About extends Model
{
    use HasFactory, HasFactory, Notifiable;

    protected $table = 'abouts';

    protected $fillable = [
        'profession',
        'birthday',
        'age',
        'website',
        'degree',
        'phone',
        'email',
        'city',
      ' freelance',    ];
}
