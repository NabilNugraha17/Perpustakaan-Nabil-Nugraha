<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'role'; // Nama tabel
    protected $fillable = ['user_id', 'role']; // Kolom yang dapat diisi
}
