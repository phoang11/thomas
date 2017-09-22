<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'middlename' => 'thien',
            'dob'=> Carbon::create(1911,12,01),
            'father_name' => '',
            'mother_name' => '',
            'address' => '',
            'address2' => '',
            'city' => '',
            'zipcode' => '',
            'phone' => '',
            'phone2' => '',
        ]);

        DB::table('students')->insert([
            'user_id' => 1,
            'firstname' => 'jane',
            'lastname' => 'doe',
            'middlename' => '',
            'dob'=> Carbon::create(1911,12,21),
            'father_name' => '',
            'mother_name' => '',
            'address' => '',
            'address2' => '',
            'city' => '',
            'zipcode' => '',
            'phone' => '',
            'phone2' => '',
        ]);

        DB::table('students')->insert([
            'user_id' => 1,
            'firstname' => 'joe',
            'lastname' => 'smith',
            'middlename' => 'david',
            'dob'=> Carbon::create(1911,03,01),
            'father_name' => '',
            'mother_name' => '',
            'address' => '',
            'address2' => '',
            'city' => '',
            'zipcode' => '',
            'phone' => '',
            'phone2' => '',
        ]);
    }
}
