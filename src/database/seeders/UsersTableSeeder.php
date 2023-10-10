<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'テスト太郎',
            'email' => '1@1',
            'password' => '11111111',
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'テスト次郎',
            'email' => '2@2',
            'password' => '22222222',
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'テスト三郎',
            'email' => '3@3',
            'password' => '33333333',
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'テスト四郎',
            'email' => '4@4',
            'password' => '44444444',
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'テスト五郎',
            'email' => '5@5',
            'password' => '55555555',
        ];
        DB::table('users')->insert($param);
    }
}
