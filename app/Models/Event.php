<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at'
    ];

    public function workshops() {
        return $this->hasMany(Workshop::class);
    }
}
