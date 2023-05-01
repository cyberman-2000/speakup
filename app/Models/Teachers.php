<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;
    protected $guarded = [''];
    public function media(){
            return $this->hasMany(socialMedia::class,'teacher_id');
    }
}
