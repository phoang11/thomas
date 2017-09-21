<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'phuoc',
            'email' => 'admin@novemberstudio.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('students')->insert([
            'user_id' => 1,
            'firstname' => 'phuoc',
            'lastname' => 'hoang',
        ]);

        DB::table('students')->insert([
            'user_id' => 1,
            'firstname' => 'jane',
            'lastname' => 'doe',
        ]);

        DB::table('students')->insert([
            'user_id' => 1,
            'firstname' => 'joe',
            'lastname' => 'smith',
        ]);
    }
}
