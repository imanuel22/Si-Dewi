<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinasicount extends Model
{
    use HasFactory;
    protected $fillable = ['id_destinasi','count'];

}
