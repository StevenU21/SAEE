<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'area_id',
        'center_id',
        'modality_id'
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function center()
    {
        return $this->belongsTo(Center::class);
    }

    public function modality()
    {
        return $this->belongsTo(Modality::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
