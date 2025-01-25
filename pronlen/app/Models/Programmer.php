<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programmer extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_programmer';
    protected $fillable = ['nama_programmer', 'keahlian', 'bahasa'];
}
