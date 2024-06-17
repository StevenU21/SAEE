<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    //departments
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    //carreras
    public function careers()
    {
        return $this->hasMany(Career::class);
    }
}
