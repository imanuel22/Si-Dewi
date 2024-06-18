<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paketcount extends Model
{
    use HasFactory;
    protected $fillable = ['id_paket','count'];

}
