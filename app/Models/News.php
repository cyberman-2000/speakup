<?php

namespace App\Models;

use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use IntlDateFormatter;

class News extends Model
{
    use HasFactory;
    public function getNewsDate()
    {
        $formatter = new IntlDateFormatter('en_EN',IntlDateFormatter::FULL,IntlDateFormatter::FULL);
        $formatter->setPattern('d MMM y');
        return $formatter->format(new DateTime($this->when));
//        return Carbon::parse($this->when)->diffForHumans();
    }
    protected $table='news';
    protected $guarded=[''];
}
