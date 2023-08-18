<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;
    
    protected $fillable = [
      'username',
      'name',
      'email',
      'phone',
      'tujuan_kunjungan',
      'waktu_kunjungan',
      'catatan',
      ];
}
