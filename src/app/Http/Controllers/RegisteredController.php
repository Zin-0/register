<?php

namespace App\Http\Controllers;
/*
use App\Http\Requests\StaffRequest;
*/
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Work;
use App\Models\Breaking;
use Carbon\Carbon;

class RegisteredController extends Controller
{
    public function stamp()
    {
        $user = Auth::user();
        $number = "0";
        return view('stamp', ['user' => $user], compact('number'));
    }

    public function work_start()
    {
        $user = Auth::user();
        $user_id = Auth::id();
        $oldTimestamp = Work::where('user_id', $user_id)->latest()->first();
        if($oldTimestamp){
            $oldTimestampStart = new Carbon($oldTimestamp->start_time);
            $oldTimestampDay = $oldTimestampStart->startOfDay();
        }
        $newTimestampDay = Carbon::today();
        if(($oldTimestampDay == $newTimestampDay)){
            $number = "0";
            return view('stamp', ['user' => $user], compact('number'))->with('error', 'すでに出勤打刻がされています');
        };
        $works = Work::create([
            'user_id' => $user_id,
            'start_time' => Carbon::now(),
        ]);
        $number = "1";
        return view('stamp', ['user' => $user], compact('number'));
    }

    public function work_end()
    {
        $user = Auth::user();
        $user_id = Auth::id();
        $now_time = Carbon::now();
        Work::where([
            ['user_id', $user_id],
        ])
        ->latest()->first()->update([
            'end_time' => $now_time
        ]);
        $number = "0";
        return view('stamp', ['user' => $user], compact('number'));
    }

        public function break_start()
    {
        $user = Auth::user();
        $user_id = Auth::id();
        $work = Work::where([
            ['user_id', $user_id],
        ])
        ->latest()->first();
        $breakings = Breaking::create([
            'work_id' => $work->id,
            'start_time' => Carbon::now(),
        ]);
        $number = "2";
        return view('stamp', ['user' => $user], compact('number'));
    }

        public function break_end()
    {
        $user = Auth::user();
        $user_id = Auth::id();
        $work_id = Work::where([
            ['user_id', $user_id],
        ])
        ->latest()->first()->id;
        $now_time = Carbon::now();
        Breaking::where([
            ['work_id', $work_id],
        ])
        ->latest()->first()->update([
            'end_time' => $now_time
        ]);
        $number = "1";
        return view('stamp', ['user' => $user], compact('number'));
    }


    public function date()
    {
        /*
        $user = User::all();
        */
        $works = Work::all();
        $days = Carbon::today();
        $day_works = Work::whereDate('start_time', '<=', $days)->Paginate(5);
        /*
        for($i = 0; $i <= 30; $i++){
            $days = $days->subDay();
            $day_works = Work::where([
                ['start-time', $days->day]
            ])->get();
        };
        $users = User::Paginate(5);
        */
        return view('date', compact('day_works'));
    }
    
    /*
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
    */
}
