<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Breaking;
use Carbon\Carbon;

class Work extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'start_time', 'end_time'];

    protected $table = 'works';

    protected $dates = [
        'start_time',
        'end_time',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function getName(){
        return optional($this->user)->name;
    }

    public function breaking(){
        return $this->hasMany('App\Models\Breaking');
    }

    public function break(){
        $breakings = Breaking::where('work_id', $this->id)->first();
        $start_time = optional($breakings)->start_time;
        $end_time = optional($breakings)->end_time;
        $diffInSeconds = $start_time->diffInSeconds($end_time);
        $hours = floor($diffInSeconds / 3600);
        $minutes = floor(($diffInSeconds % 3600) / 60);
        $seconds = $diffInSeconds % 60;
        return $hours. "-". $minutes. "-". $seconds;

    }

}
