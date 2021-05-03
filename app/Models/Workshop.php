<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Workshop extends Model
{
    protected $fillable = [
        'id'.
        'start',
        'end',
        'name',
        'event_id',
        'created_at',
        'updated_at'
    ];

    public function event() {
        return $this->belongsTo(Event::class);
    }
}
