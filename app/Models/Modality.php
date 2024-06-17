<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modality extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function careers()
    {
        return $this->hasMany(Career::class);
    }
}
