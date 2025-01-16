<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Etxea extends Model
{
    /** @use HasFactory<\Database\Factories\EtxeaFactory> */
    use HasFactory;

    protected $fillable=[
        "helbidea",
        "logela_kopurua",
        "eraikuntza_urtea",
    ];

   

}
