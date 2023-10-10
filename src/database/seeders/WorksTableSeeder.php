<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
            'user_id' => '3',
            'start_time' => '2021-11-01 10:00:00',
            'end_time' => '2021-11-01 20:00:00',
        ];
        DB::table('works')->insert($param);
        $param =[
            'user_id' => '4',
            'start_time' => '2021-11-01 10:00:10',
            'end_time' => '2021-11-01 20:00:00',
        ];
        DB::table('works')->insert($param);
        $param =[
            'user_id' => '5',
            'start_time' => '2021-11-01 10:00:10',
            'end_time' => '2021-11-01 20:00:00',
        ];
        DB::table('works')->insert($param);
        $param =[
            'user_id' => '6',
            'start_time' => '2021-11-01 10:00:20',
            'end_time' => '2021-11-01 20:00:00',
        ];
        DB::table('works')->insert($param);
        $param =[
            'user_id' => '7',
            'start_time' => '2021-11-01 10:00:20',
            'end_time' => '2021-11-01 20:00:00',
        ];
        DB::table('works')->insert($param);
    }
}
