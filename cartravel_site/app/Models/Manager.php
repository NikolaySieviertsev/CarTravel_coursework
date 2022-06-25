<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    public $timestamps = false;
    protected $table = 'managers';
    use HasFactory;
    public function trips(){
        return $this->belongsToMany(Trip::class);
    }
}