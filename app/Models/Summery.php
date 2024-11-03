<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Summery extends Model
{
    use HasFactory;
    protected $table = 'summeries';
    protected $fillable = ['name','description','address','phone','email'];
}
