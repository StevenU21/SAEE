<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'birth_date',
        'neighborhood',
        'state',
        'favorite_subject',
        'average',
    ];

    //relacion con sexos
    public function sex()
    {
        return $this->hasOne(Sex::class);
    }

    //relacion con municipios
    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }
}
