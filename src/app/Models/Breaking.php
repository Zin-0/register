<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Work;
use Carbon\Carbon;


class Breaking extends Model
{
    use HasFactory;

    protected $fillable = ['work_id', 'start_time', 'end_time'];

    protected $table = 'breakings';

    protected $dates = [
        'start_time',
        'end_time',
    ];

    public function getBreak(){/*
        if($this){
            $start_time = $this->start_time;
            $end_time = $this->end_time;
            $diffInSeconds = $start_time->diffInSeconds($end_time);
            $hours = floor($diffInSeconds / 3600);
            $minutes = floor(($diffInSeconds % 3600) / 60);
            $seconds = $diffInSeconds % 60;
            return $hours. "-". $minutes. "-". $seconds;
        }else{
            return "00-00-00";
        }*/
        return $this->start_time;
    }

        public function work(){
        return $this->belongsTo('App\Models\Work');
    }

}
