<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BreakingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
            'work_id' => '14',
            'start_time' => '2021-11-01 11:00:00',
            'end_time' => '2021-11-01 11:30:00',
        ];
        DB::table('breakings')->insert($param);
        $param =[
            'work_id' => '15',
            'start_time' => '2021-11-01 11:00:00',
            'end_time' => '2021-11-01 11:30:00',
        ];
        DB::table('breakings')->insert($param);
        $param =[
            'work_id' => '16',
            'start_time' => '2021-11-01 11:00:00',
            'end_time' => '2021-11-01 11:30:00',
        ];
        DB::table('breakings')->insert($param);
        $param =[
            'work_id' => '17',
            'start_time' => '2021-11-01 11:00:00',
            'end_time' => '2021-11-01 11:30:00',
        ];
        DB::table('breakings')->insert($param);
        $param =[
            'work_id' => '18',
            'start_time' => '2021-11-01 11:00:00',
            'end_time' => '2021-11-01 11:30:00',
        ];
        DB::table('breakings')->insert($param);
    }
}
