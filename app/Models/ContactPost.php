<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPost extends Model
{
    use HasFactory;
    public $table='contact_posts';
    protected $fillable=[
        'name','subject','phone_number','message'
    ];
}
