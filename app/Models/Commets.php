<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Commets extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function getComDate()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }
}
