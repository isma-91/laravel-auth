<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =
        [
            [
                'name'      => 'asdf',
                'email'     => 'asdf@asdf.asdf',
                'password'  => Hash::make('asdf'),
            ],
            [
                'name'      => 'qwert',
                'email'     => 'qwert@qwert.qwert',
                'password'  => Hash::make('qwert'),
            ],
            [
                'name'      => 'zxcv',
                'email'     => 'zxcv@zxcv.zxcv',
                'password'  => Hash::make('zxcv'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
