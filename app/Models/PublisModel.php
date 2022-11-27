<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublisModel extends Model
{
    protected $table = 'publicaciones';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre'];
}
