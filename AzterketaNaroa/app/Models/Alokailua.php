<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Alokailua extends Model
{
    /** @use HasFactory<\Database\Factories\AlokailuaFactory> */
    use HasFactory;
    protected $fillable=[
       "izena",
       "etxea_id",
    ];

   public function etxea():BelongsTo{
    return $this-> belongsTo(Etxea::class);
   }
}
