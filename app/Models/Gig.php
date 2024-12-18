<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gig extends Model
{
   use HasFactory;

   protected $guarded = ['id'];

   function user(): BelongsTo
   {
      return $this->belongsTo(User::class);
   }
}
