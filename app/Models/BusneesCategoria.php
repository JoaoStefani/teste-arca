<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusneesCategoria extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'businees_categorias';

    public $timestamps = true;

    protected $fillable = [
        'business_id',
        'categorie_id'
    ];
}
