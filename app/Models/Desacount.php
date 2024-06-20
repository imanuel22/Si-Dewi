<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desacount extends Model
{
    use HasFactory;
    protected $fillable = ['id_desawisata','count'];
}
