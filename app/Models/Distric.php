<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distric extends Model
{
    use HasFactory;


       public function division()
    {
      return $this->belongsTo(Division::class, 'division_id');
    }

}
