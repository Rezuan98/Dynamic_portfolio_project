<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overview extends Model
{
    use HasFactory;

    protected $table = 'overviews';

    protected $fillable = [
        'imogi',
        'number',
        'title',
        'desc'
           ];
}
