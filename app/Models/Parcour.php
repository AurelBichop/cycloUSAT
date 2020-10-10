<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcour extends Model
{
    use HasFactory;

    protected $fillable = [
        "created_at",
        "updated_at",
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mes_parcours';


}
