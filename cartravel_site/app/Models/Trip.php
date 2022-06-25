<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    public $timestamps = false;
    protected $table = 'trips';
    use HasFactory;
    public function managers(){
        return $this->belongsToMany(Manager::class);
    }
    public function clients()
    {
        return $this->belongsTo(Client::class);
    }
}