<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'business';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'telephone',
        'address',
        'zip_code',
        'city',
        'state',
        'description',
    ];
}
