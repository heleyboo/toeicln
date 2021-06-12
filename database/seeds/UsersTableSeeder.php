<?php

use Carbon\Carbon;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'toeicln@gmail.com',
                'password' => Hash::make('toeicln@1234'),
                'status' => true,
                'is_admin' => true,
                'confirm_code' => str_random(64),
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ]
        ];

        DB::table('users')->insert($users);
    }
}
