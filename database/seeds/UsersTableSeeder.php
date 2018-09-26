<?php

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
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('password'),

            ],
            [
                'name' => 'Author',
                'email' => 'author@mail.com',
                'password' => bcrypt('password'),

            ],
        ];

        DB::table('users')->insert($users);
    }
}
