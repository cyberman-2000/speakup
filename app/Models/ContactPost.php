<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class ContactPost extends Model
{
    use HasFactory;
    public $table='contact_posts';
    protected $fillable=[
        'name','subject','phone_number','message','created_at'
    ];
    public function getNewsDate()
    {
//        $formatter = new IntlDateFormatter('en_EN',IntlDateFormatter::FULL,IntlDateFormatter::FULL);
//        $formatter->setPattern('d MMM y');
//        return $formatter->format(new DateTime($this->when));
        return Carbon::parse($this->created_at)->diffForHumans();
    }
}
