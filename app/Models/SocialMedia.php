<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class socialMedia extends Model
{
    use HasFactory;
    protected $guarded=[''];
    public $table='socialMedia';
    public function teacher(){
        return $this->belongsTo(Teachers::class);
    }

}
