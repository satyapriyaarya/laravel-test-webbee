<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'id',
        'name',
        'url',
        'parent_id',
        'created_at',
        'updated_at'
    ];

    public function parent() {
        return $this->belongsTo(MenuItem::class, 'parent_id');
    }

    public function child(){
        return $this->hasMany(MenuItem::class, 'parent_id'); 
    }

    public function parentAll() {
        return $this->belongsTo(MenuItem::class, 'parent_id')->with('parent');
    }

    public function childAll(){
        return $this->hasMany(MenuItem::class, 'parent_id')->with('child'); 
    }

}
