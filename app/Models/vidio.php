<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vidio extends Model
{
    use HasFactory;
    protected $table = 'vidio';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
