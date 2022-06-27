<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hostipal extends Model
{
    use HasFactory;

       public function distric()
    {
      return $this->belongsTo(Distric::class, 'distric_id');
    }
}
