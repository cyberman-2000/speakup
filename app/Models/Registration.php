<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Registration extends Model
{
    use HasFactory;
    public $guarded = [];
    public function getRegDate()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }
}
